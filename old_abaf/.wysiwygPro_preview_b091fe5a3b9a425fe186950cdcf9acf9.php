<?php
if ($_GET['randomId'] != "yBSa4bc27kz8GhIXzzaigISLWCyBiIN7djMEH0wcrkviVgF7WUQWoldlt8XoCp1V") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
