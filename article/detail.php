<?php
  if($_GET['id'] == null){
    $GET['id'] == 0;
  }

  $id = $_GET['id'];

  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
  $sql = "select * from article where id = $id";
  $rs = mysqli_query($myConn, $sql);
  $article = mysqli_fetch_assoc($rs)

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  div{
    border: 1px solid black;
    height: 300px;
    padding: 20px 10px 20px 10px;
  }
  button{
      margin-right: 10px;
      float: right;
    }
    input{
      margin-right: 10px;
      float: right;
    }
  </style>
</head>
<body>
    <h3>게시물 상세페이지</h3>
    <hr>
    <?=$id?> 번 게시물 <br>
    <form action="modify.php">
    작성 일자 : <?=$article['regDate']?><br>
    수정 일자 : <?php if($article['updateDate'] == null){ ?> 수정 없음</div></a>
      <?php } else { ?>  <?=$article['updateDate'] ?><br><?php }?>
    <hr>
    제목 : <?=$article['title']?><br>
    내용<br>
    <div><?=$article['contents']?></div>
    <br>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="button" value="돌아가기" onclick="location.href='list.php'">
    <input type="button" value="글쓰기" onclick="location.href='write.php'">
    <input type="button" value="삭제" onclick="location.href='delete.php?id=<?=$id?>'">
    <input type="submit" value="수정" >

    </form>
    
<?php
  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
    
  $sql = "select count(*) from reply where relId = $id";
  $rs = mysqli_query($myConn, $sql);
  $count = mysqli_fetch_assoc($rs);
   

  $sql = "select * from reply where relId = $id";
  $rs = mysqli_query($myConn, $sql);
  $replys = [];
  while($reply = mysqli_fetch_assoc($rs)){
      $replys[] = $reply;
  }
?>

    <h3>댓글 </h3>
    <hr>



</body>
</html>