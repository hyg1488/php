<?php

  $id = $_GET['id'];


  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");

  $sql = "SELECT * FROM article where id = $id";
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
<h3>게시판 글 수정</h3>
  <hr>
    제목 : <input type="text" name="title" style="width:300px;" value="<?=$article['title']?>"/><br />
    내용 <br>
    <textarea type="text" name= "body" cols="30" rows="10"><?=$article['body']?></textarea><br>
    <input type="hidden" name="id" value="<?=$id?>">
    <!-- submit 은 발송버튼을 의미합니다. -->
    <input type="button" value="돌아가기" onclick="location.href='detail.php?id=<?=$id?>'">
    <input type="button" value="리스트" onclick="location.href='list.php'">

    <input class = "su" type="submit" value="수정" />

  </form>
</body>
</html>