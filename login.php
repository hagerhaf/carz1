<?php
include "db.php";
if(isset($_POST['login']))
{
$email=mysql_real_escape_string(htmlspecialchars(trim($_POST['email'])));
$password=mysql_real_escape_string(htmlspecialchars(trim($_POST['password'])));
$login=mysql_num_rows(mysql_query("select * from `phonegap_login` where `email`='$email' and `password`='$password'"));
if($login!=0)
{
echo "success";
}
else
{
echo "failed";
}
}
?>