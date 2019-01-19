本網站利用Azure進行架設網站及Database等運作，網址:https://yuehsienmysql.azurewebsites.net/first.php
使用工具:
1.架站:Microsoft Azure
2.資料庫:Mysql
3.工具:Filezilla、HeidiSQL
4.網站語言:PHP、JS、Jquery

房地產資料庫:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%961.PNG)
說明:利用Excel轉CSV匯入。
1.
登入註冊頁面
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%962.PNG)

2.註冊一帳號:
姓名:veteran
帳號:sady6407
密碼:c@717630
權限:admin
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%963.PNG)

註冊成功:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%964.PNG)

登入頁面:
利用recaptcha機器人進行驗證
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%965.PNG)
1.驗證失敗:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%966.PNG)

2.驗證成功登入主頁面:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%967.PNG)

進行房地產資料查詢:
1.主頁面
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%968.PNG)
假如選擇全部，不選擇面積或是每坪金額直接查詢，則顯示全部資料，而使用者跟選案表格的排序來方便尋找自己的資料。
該圖表利用Jquery套件完成。
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%969.PNG)
基於以上原則:
將有幾種情況:
1.選擇"全部"，坪數有範圍金額有範圍。
2.選擇"全部"，坪數有範圍金額沒範圍。
3.選擇"全部"，坪數沒範圍金額有範圍。
4.不選擇"全部"，坪數有範圍金額有範圍。
5.不選擇"全部"，坪數有範圍金額沒範圍。
6.不選擇"全部"，坪數沒範圍金額有範圍。
將根據使用者的輸入決定範圍。

觀看他人資料(根據權限區分)
1.admin帳號:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9610.PNG)
2.user帳號
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9611.PNG)
3.guest帳號:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9612.PNG)

admin刪除資料:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9615.PNG)

圖形化觀察房地產:
1.主頁面:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9613.PNG)
2.勾選地區顯示圖形:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9614.PNG)

報告結束!
