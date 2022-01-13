<?php
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話
        echo "請登入帳號";//顯示請登入帳號                             //自動更新網頁的時間 更新時間為3秒
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//3秒後跳回login.html的畫面
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//建立資料庫連線
        $sql="delete from bulletin where bid='{$_GET[bid]}'";//搜尋資料庫
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";//顯示佈告刪除錯誤
        }else{
            echo "佈告刪除成功";//顯示佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//3秒後回到bulletin.php
    }
?>