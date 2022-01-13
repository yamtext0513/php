<?php

error_reporting(0);//(0)為禁用錯誤報告
session_start();
if (!$_SESSION["id"]) {//如果沒有登入的話  
    echo "請登入帳號"; //顯示請登入帳號                             //自動更新網頁的時間 更新時間為3秒
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  //3秒後跳回login.html的畫面
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");//建立資料庫連線
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";//搜尋資料庫
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";//顯示新增命令錯誤
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";//顯示新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //meta http-equiv=REFRESH :自動更新網頁的時間
   }
}
?>