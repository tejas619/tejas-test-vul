<html>
<body>
<?php

if(!empty($_POST["password"])) {
    echo 'Welcome '. $_POST["userid"]."<br>";
    echo 'This is your Welcome page!';
} else{
    echo 'Sorry 404 not found';
}
?>
</body>
</html>
