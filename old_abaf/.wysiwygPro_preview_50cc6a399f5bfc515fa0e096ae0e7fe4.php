<?php
if ($_GET['randomId'] != "atBv9BronEOBQOmvYrkLmowTEu5seJYT7LOcsfayahQ7F9qwY49DlmyG0B9_iw4I") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
