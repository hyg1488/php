<?php
if($_GET['id'] == null){
  $GET['id'] == 0;
}
  if($_GET['title'] == null){
    $GET['title'] == "";
  }if($_GET['body'] == null){
    $GET['body'] == "";
  }
  $id = $_GET['id'];
  $title = $_GET['title'];
  $body = $_GET['body'];

  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
  $sql = "update article set title='$title', contents='$body', updateDate=now() where id = $id";
  $rs = mysqli_query($myConn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1><?=$id?>번 글이 정상적으로 수정 되었습니다.</h1>
    <input type="button" value="리스트로 이동" onclick="location.href='list.php'">
    <input type="button" value="작성된 글로 이동" onclick="location.href='detail.php?id=<?=$id?>'">


</body>
</html>