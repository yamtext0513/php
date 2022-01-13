<?php
    error_reporting(0);//(0)為禁用錯誤報告
    session_start();
    if (!$_SESSION["id"]) {//如果沒有登入的話
        echo "please login first";//顯示請登入帳號                     //自動更新網頁的時間 更新時間為3秒
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//3秒後跳回login.html的畫面
    }
    else{
        
        $conn=mysqli_connect("localhost","root","","mydb");//建立資料庫連線
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}");//用來取得 MySQL 結果
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)//row為開始被檢索的行數
            $checked1="checked";//變數1
        if ($row['type']==2)//row為開始被檢索的行數
            $checked2="checked";//變數2
        if ($row['type']==3)//row為開始被檢索的行數
            $checked3="checked";//變數3
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";//表單
    }
?>