<?php
if ($_GET['randomId'] != "TxvkB0FwzOUUr_9F_UMLbp6ZrNTq2SwrqHoup1ltSmKYTHg26CgeS55g7b30hQwU") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
