<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234")) //&& :和
        echo "Welcome";
    else
        echo "fail login";
?>
