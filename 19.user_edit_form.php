<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話    
        echo "請登入帳號";//顯示請登入帳號                              //自動更新網頁的時間 更新時間為3秒 
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//3秒後跳回login.html的畫面
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");//建立資料庫連線
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//用來取得 MySQL 結果
        $row=mysqli_fetch_array($result);//row為開始被檢索的行數
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";//表單
    }
    ?>
    </body>
</html>