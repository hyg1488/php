<?php
  $id = $_GET['id'];
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
<form action="doDelete.php" target="_blank">
<h3>게시판 글 삭제</h3>
  <hr>
    <h1><?=$id?>번 글을 정말로 삭제하시겠습니까 ? </h1>
    <input type="hidden" name="id" value="<?=$id?>">
    <!-- submit 은 발송버튼을 의미합니다. -->
    <input class = "su" type="submit" value="예" />
    <input type="button" value="아니오" onclick="location.href='detail.php?id=<?=$id?>'">

  </form>
</body>
</html>