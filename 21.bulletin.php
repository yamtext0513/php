<?php
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話    
        echo "please login first"; //顯示請登入帳號                    //自動更新網頁的時間 更新時間為3秒
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//3秒後跳回login.html的畫面
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("localhost","root","", "mydb");//建立資料庫連線
        $result=mysqli_query($conn, "select * from bulletin");//取得 MySQL 結果數據
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//table border=2 邊框粗細為2 tr :標籤代表的是一行 td :標籤則代表一列
        while ($row=mysqli_fetch_array($result)){//用來取得 MySQL 結果
            echo "<tr><td>";//tr :標籤代表的是一行 td :標籤則代表一列
            echo $row["bid"]; //row為開始被檢索的行數
            echo "</td><td>";//tr :標籤代表的是一行 td :標籤則代表一列
            echo $row["type"];//row為開始被檢索的行數
            echo "</td><td>"; //tr :標籤代表的是一行 td :標籤則代表一列
            echo $row["title"];//row為開始被檢索的行數
            echo "</td><td>";//tr :標籤代表的是一行 td :標籤則代表一列
            echo $row["content"]; //row為開始被檢索的行數
            echo "</td><td>";//tr :標籤代表的是一行 td :標籤則代表一列
            echo $row["time"];//row為開始被檢索的行數
            echo "</td></tr>";//tr :標籤代表的是一行 td :標籤則代表一列
        }
        echo "</table>";
    
    }

?>
