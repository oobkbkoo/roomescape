<?php
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost", "root", "root", "testdb");

$check="SELECT * FROM user_info WHERE userid='$id'";
$result=$mysqli->query($check);
if($result->num_rows == 1)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);  // 하나의 열을 배열로 가져오기
  if($row['userpw'] == $password)    // MYSQLI_ASSOC 필드명으로 첨자가능
  {
    $_SESSION['userid'] = $id;      // 로그인 성공 시 세션 변수 만들기
    if(isset($_SESSION['userid']))  // 세션 변수가 참일 때
    {
      header('Location: main.php'); // 로그인 성공 시 페이지 이동
    }
    else
    {
      echo "세션 저장 실패";
    }
  }
  else
  {
    echo "잘못된 id or password";
  }
}
else {
  echo "wrong id or pw";
}
?>
