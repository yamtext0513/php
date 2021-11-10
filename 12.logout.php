<?php
    session_start(); 
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>"; //content :內容 meta http-equiv=REFRESH content='3 中的content 為3秒自動更新

?>