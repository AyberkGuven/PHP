<!-- <!DOCTYPE html>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + time()+30*24*60*60); // 86400 = 1 day
?>

<?php
// set the expiration date to one hour ago

echo $_COOKIE["user"];


setcookie($cookie_name, "", time() - 3600);
?>
<html>
<body>

<?php
echo $_COOKIE["user"];

//echo "Cookie 'user' is deleted.";
?>

</body>
</html> -->