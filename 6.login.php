<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; //$login :全域性變數
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { //if 判斷式
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "welcome!!";
  else
     echo "id/pwd wrong!!";
?>