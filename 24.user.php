<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);//(0)為禁用錯誤報告
        session_start();
        if (!$_SESSION["id"]) {//如果沒有登入的話    
            echo "請登入帳號";//顯示請登入帳號                             //自動更新網頁的時間 更新時間為3秒 
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後跳回login.html的畫面
        }
        else{   //h1為字體最大             // a href 超連結
            echo "<h1>使用者管理</h1>
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";//table border=1 邊框粗細為1 tr :標籤代表的是一行 td :標籤則代表一列
            
            $conn=mysqli_connect("localhost","root","","mydb");//建立資料庫連線
            $result=mysqli_query($conn, "select * from user");//取得 MySQL 結果
            while ($row=mysqli_fetch_array($result)){//row為開始被檢索的行數
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";//結束表格
        }
    ?> 
    </body>
</html>