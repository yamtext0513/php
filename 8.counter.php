<?php
    session_start(); //session_start :在使用 session前，要先用 session_start() 這個函式，告訴系統準備開始使用
    if (!isset($_SESSION["counter"])) //!isset :檢查變數是否設置，可以檢查變數之外，還可以檢查陣列
        $_SESSION["counter"]=1;  //$_SESSION :全域性變數
    else                       //SESSION :儲存於伺服器端，不用擔心用戶禁用session的問題，但計錄檔案的負荷由伺服器承擔。
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>"; //a href :超連結
?>