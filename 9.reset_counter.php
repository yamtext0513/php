<?php
    session_start();//session_start :在使用 session前，要先用 session_start() 這個函式，告訴系統準備開始使用
    unset($_SESSION["counter"]); //unset :刪除變數
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>"; //meta http-equiv=REFRESH :提供網頁標頭（HTML head）關於網頁的內容屬性資訊

?>