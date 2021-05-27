<!-- htdocs/usr/article/list.php
  - 링크 : 글 작성 폼, 글 상세페이지
- htdocs/usr/article/detail.php
  - 링크 : 글 리스트
- htdocs/usr/article/doWrite.php
  - 링크 : alert으로 메세지 띄운후 location.replace 을 이용해서 새글의 상세페이지로 이동
- htdocs/usr/article/doDelete.php
  - 링크 : alert으로 메세지 띄운후 location.replace 을 이용해서 게시물리스트로 이동
- htdocs/usr/article/doModify.php
  - 링크 : alert으로 메세지 띄운후 location.replace 을 이용해서 수정된 글의 상세페이지로 이동
- htdocs/usr/article/write.php
  - 링크 : 글 리스트
- htdocs/usr/article/modify.php
  - 링크 : 글 리스트, 원문(수정하려고하는 글의 상세페이지) -->


<?php
  $myConn = mysqli_connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
  $sql = "select * from article order by id desc";
  $rs = mysqli_query($myConn, $sql);
  $articles = [];
  while($article = mysqli_fetch_assoc($rs)){
    $articles[] = $article;
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    div{
      display: inline-block;
      margin: 10px 4% 10px 4%;
    }
    a{
      color: inherit;
      text-decoration:none;
    }
    a:hover{
      color: blue;
    }
    /* strong{
      margin-left:10%;
    } */
    button{
      float: right;
    }
  </style>
  <script>
    
  </script>
</head>
<body>
  <h3>게시판 리스트</h3>
  <hr>
  
  <strong> <div>번호</div><div> 제목</div><div> 작성일자</div><div> 수정일자 </div></strong><br>
  <?php foreach($articles as $article){ ?>
    <a href="detail.php?id=<?=$article['id']?>">
    <div><?=$article['id']?></div>
    <div><?=substr($article['title'],0,10)?> </div> 
    <div><?=substr($article['regDate'],0,10)?></div>  
    <div><?php if($article['updateDate'] == null){ ?> 수정 없음</div><br><br></a>
      <?php } else { ?>  <?=substr($article['updateDate'],0,10) ?> </div><br><br></a>
  <?php }} ?>
  <button onclick="location.href='write.php'">글쓰기</button>
  <botton class="btn btn-success" onclick="$(this).hide();"> click me ! </button>
</body>
</html>