<?php
/*
$host = 'localhost';
  $user = 'root';
  $pw = 'root';
  $dbName = 'roomescape';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

  if($mysqli){
      echo "MySQL 접속 성공";
  }else{
      echo "MySQL 접속 실패";
  }
*/

$host = 'localhost';
  $user = 'root';
  $pw = 'root';
  $dbName = 'roomescape';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

$query = "select * from user_info";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);

session_start();
 echo("세션이 시작되었습니다."."<br>");
 if(isset($_SESSION['userid'])) // 세션의 값이 없을 때(=로그인 상태가 아님)
 {
   <script>
   alert('main.php');
   </script>
   header('location:main_screen1.html'); // 로그인 페이지로 이동
 }
 else {
   <buton onclick="location.href='./login.php'">로그이인</button>
 }
/*
$connect mysqli_connect('localhost', 'root', 'root', 'roomescape');
$query = "select * from user_info";
$result = $connect->query($query);
$total = mysqli_num_rows($result);

session_start();
 echo("세션이 시작되었습니다."."<br>");
if(isset($_SESSION['userid'])) // 세션의 값이 없을 때(=로그인 상태가 아님)
{
  <script>
  alert('main.php');
  </script>
  header('location:main_screen1.html'); // 로그인 페이지로 이동
}
else {
  <buton onclick="location.href='./login.php'">로그이인</button>
}
/*
// 세션 값 존재 시, 로그인 성공 출력 및 로그아웃 링크 생성
echo "홈(로그인 성공)";

echo "<a href=logout.php>로그아웃</a>";
*/
?>
