<?php
  if($_GET['title'] == null){
    $GET['title'] == "";
  }if($_GET['body'] == null){
    $GET['body'] == "";
  }

  $title = $_GET['title'];
  $body = $_GET['body'];

  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
  $sql = "insert into article set title='$title', contents='$body', regDate=now()";
  $rs = mysqli_query($myConn, $sql);

  $sql = "SELECT * FROM article ORDER BY id DESC LIMIT 1";
  $rs = mysqli_query($myConn, $sql);
  $article = mysqli_fetch_assoc($rs);
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
    <h1><?=$article['id']?>번 글이 정상적으로 작성 되었습니다.</h1>
    <input type="button" value="리스트로 이동" onclick="location.href='list.php'">
    <input type="button" value="작성된 글로 이동" onclick="location.href='detail.php?id=<?=$article['id']?>'">


</body>
</html>