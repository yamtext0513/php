<?php

    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話    
        echo "請登入帳號";//顯示請登入帳號                             //自動更新網頁的時間 更新時間為3秒
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  //3秒後跳回login.html的畫面
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//建立資料庫連線
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";//顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//3秒後回到user.php的畫面
        }else{
            echo "修改成功，三秒鐘後回到網頁";//顯示修改成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//3秒後回到user.php的畫面
        }
    }

?>