本網站利用Azure進行架設網站及Database等運作，網址:https://yuehsienmysql.azurewebsites.net/first.php

使用工具:

1.架站:Microsoft Azure

2.資料庫:Mysql

3.工具:Filezilla、HeidiSQL

4.網站語言:PHP、JS、Jquery

網站流程:
![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9618.png)

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
假如選擇全部，不選擇面積或是每坪金額直接查詢，則顯示全部資料，而使用者可以利用表格的排序來方便尋找自己的資料。
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

Azure流程:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9616.png)

Azure成果介面:

所有資源:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9619.PNG)

FTP服務:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9620.PNG)

Filezilla:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9621.PNG)

Azure Mysql:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9622.PNG)

Heidi:

![image](https://github.com/YueHsien/Awin/blob/master/images/%E6%93%B7%E5%8F%9623.PNG)

網站心得:
  本次作業讓我學習到許多，首先我以前不常用Github，不了解它有什麼優點還要花時間去架設，因為平常作業都是直接交檔案即可，因此很少接觸。但在這次作業的指導下，我了解Github的運作情況，而且未來Github就像工程師的臉書，勢必以後是找工作的一大指標參考，而且如果是大型開發案，要很多人參與開發需要一個平台可以看到別人或是自己修改了甚麼程式碼，都可以利用Github來完成同步。
  Azure是一套微軟的虛擬機服務，它提供許多的方便的服務，以學生前提下可以申請一個學生帳號，即可享用裡面眾多的服務，資料庫服務、架設網站是我這次作業學到的經驗，可以免費快速架設一個伺服器，且也藉機多了解了FTP的運作方式。而MySQL在Azure並非Default的資料庫，因此需要找Azure Database for Mysql這個資源才能完成，但也因此沒有介面，所以我使用Heidi這套系統，也是免費好用的Mysql介面，可以輸入資料庫伺服器名稱和密碼即可操作。

報告結束。
