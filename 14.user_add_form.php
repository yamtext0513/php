<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話     
        echo "請登入帳號";//顯示請登入帳號                              //自動更新網頁的時間 更新時間為3秒
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//3秒後跳回login.html的畫面
    }
    else{    
        echo "
            <form action=user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>