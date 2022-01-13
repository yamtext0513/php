<?php
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話    
        echo "please login first";//顯示請登入帳號                     //自動更新網頁的時間 更新時間為3秒 
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後跳回login.html的畫面
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");//建立資料庫連線
        $sql="insert into bulletin(title, content, type, time)";//搜尋資料庫
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}');
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";//顯示新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";//顯示新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//3秒後回到bulletin.php的畫面
        }
    }
?>
