/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {

    // represents the device capability of launching ARchitect Worlds with specific features
    isDeviceSupported: false,
    isArchitectWorldLoaded: false,

    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    onDeviceReady: function() {
        app.wikitudePlugin = cordova.require("com.wikitude.phonegap.WikitudePlugin.WikitudePlugin");        		
    },
    /*loadARchitectWorld: function() {		
        app.wikitudePlugin.isDeviceSupported(function() {
            app.wikitudePlugin.loadARchitectWorld(function successFn(loadedURL) {
                }, function errorFn(error) {
                    alert('Loading AR web view failed: ' + error);
                },
                cordova.file.dataDirectory + 'www/pgday/index.html', [ '2d_tracking' ], { camera_position: 'back' }
				//cordova.file.dataDirectory + "www/pgday/index.html", [ "2d_tracking" ], { "camera_position": "back" }
            );
        }, function(errorMessage) {
            alert(errorMessage);
        },
        [ '2d_tracking' ]
        );
    },*/    
    loadARchitectWorld: function(architectWorld) {
        app.wikitudePlugin.isDeviceSupported(function() {
            app.wikitudePlugin.setOnUrlInvokeCallback(app.onUrlInvoke);            
            if ( cordova.platformId == "android" ) {
                app.wikitudePlugin.setBackButtonCallback(app.onBackButton);
            }
            app.wikitudePlugin.loadARchitectWorld(function successFn(loadedURL) {                    			
                    app.isArchitectWorldLoaded = true;                    
                    if ( architectWorld.requiredExtension === "ObtainPoiDataFromApplicationModel" ) {
                        injectGeneratedPoiJsonData();						
                    }					
                }, function errorFn(error) {
                    app.isArchitectWorldLoaded = false;
                    alert('Loading AR web view failed: ' + error);
                },
                architectWorld.path, architectWorld.requiredFeatures, architectWorld.startupConfiguration
            );
        }, function(errorMessage) {
            alert(errorMessage);
        },
        architectWorld.requiredFeatures
        );
    },
    loadExampleARchitectWorld: function(example) {		
        app.isArchitectWorldLoaded = false;        
        if ( example.requiredExtension === "ObtainPoiDataFromApplicationModel" ) {
            prepareApplicationDataModel();			
        }
        if ( example.path.length > cordova.file.applicationDirectory ) {
            if ( example.path.substring(0, cordova.file.applicationDirectory) != cordova.file.applicationDirectory ) {
				alert('loadExampleARchitectWorld');
                example.path = cordova.file.applicationDirectory + example.path;
            }
        }
        app.loadARchitectWorld(example);
    },
	MyARchitectWorld: function() {	
        app.isArchitectWorldLoaded = true;  	
        app.wikitudePlugin.isDeviceSupported(function() {
            app.wikitudePlugin.loadARchitectWorld(function successFn(loadedURL) {
				alert('MyARchitectWorld');
                }, function errorFn(error) {
                    alert('Loading AR web view failed: ' + error);
                },
                "www/world/3_3dModels_1_3dModelOnTarget/index.html", [ "2d_tracking", "geo"], { "camera_position": "back" }				
            );
        }, function(errorMessage) {
            alert(errorMessage);
        },
        [ "2d_tracking", "geo" ]
        );
    },
    loadCustomARchitectWorldFromURL: function(url) {
        var world = {
            "path": url,
            "requiredFeatures": [
                "2d_tracking",
                "geo"
            ],
            "startupConfiguration": {
                "camera_position": "back"
            }
        };
        app.isArchitectWorldLoaded = false;
        app.loadARchitectWorld(world);		
    },   
    onUrlInvoke: function (url) {
        if (url.indexOf('captureScreen') > -1) {				
            app.wikitudePlugin.captureScreen(
                function(absoluteFilePath) {
                    alert("snapshot stored at:\n" + absoluteFilePath);
                },
                function (errorMessage) {
                    alert(errorMessage);
                },
                true, null
            );
        } else {
            alert(url + "not handled");
        }
    },
    onBackButton: function() {        
    }
};
app.initialize();