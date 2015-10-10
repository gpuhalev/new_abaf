<?php
if ($_GET['randomId'] != "i67XuhcOTNeBdWCcaEFyhTK1y_yWqrg4bfNOPRAUzF35T8t8fcHWXCPjrAiLhTNl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
