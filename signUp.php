<?php

$host = 'localhost';
$user = 'root';
$pw = 'root';
$dbName = 'roomescape';

//$mysqli = mysqli_connect($host, $user, $pw, $dbName);
/*$query = "select * from user_info";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);
*/
$mysqli = new mysqli($host, $user, $pw, $dbName);
//mysql_select_db('user_info', &mysqli);
$query = "select * from user_info";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);

session_start();
 echo("세션이 시작되었습니다.");

$id=$_POST['id'];
$password=$_POST['password'];
$password_check=$_POST['password_check'];
$name=$_POST['name'];

if($password != $password_check)
{
  echo "비밀번호와 비밀번호 확인이 일치하지 않습니다.";
  echo "<a href=signUp.html>back page</a>";
  exit();
}
if($id == NULL || $password == NULL || $name == NULL)
{
  echo "전부 정보 입력해주세요.";
  echo "<a href=signUp.html>back page</a>";
  exit();
}

$check="SELECT * FROM user_info WHERE userid='$id'";
$check_result=$mysqli->query($check);
//mysql_query($check, $mysqli);

if($check_result->num_rows == 1)
{
  echo "중복된 id 입니다.";
  echo "<a href=signUp.html> back page </a>";
  exit();
}
echo "$id";
$signup = mysqli_query($mysqli, "INSERT INTO user_info (userid, userpw, username) VALUES ('$id', '$password', '$name')");
//$signup_result = $mysqli->query($signup);

if($signup)
{
  echo("sign up success");
}

$mysqli->close();
?>
