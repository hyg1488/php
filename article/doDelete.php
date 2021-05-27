<?php

  $id = $_GET['id'];


  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");

  $sql = "delete from article where id = $id";
  $rs = mysqli_query($myConn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    textarea{
      width: 400px;
      height: 300px;
    }
    .su{
      margin-left: 250px;
    }
  </style>
</head>
<body>
<form action="doModify.php" target="_blank">
    <h1><?=$id?>번 글이 정상적으로 삭제 되었습니다.</h1>
    <input type="button" value="리스트로 이동" onclick="location.href='list.php'">

  </form>
</body>
</html>