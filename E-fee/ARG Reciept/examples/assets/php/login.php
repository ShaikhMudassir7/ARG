<?php

if (isset($_POST['user'])) {
    
$uname = $_POST['user'];
$pass = $_POST['password'];

if ($uname=="admin"||$pass="admin1234") {
    header("Location: app.html");
}
else {
    echo "Error While Loging in";
}
}
?>