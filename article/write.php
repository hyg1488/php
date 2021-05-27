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
<form action="doWrite.php" target="_blank">
<h3>게시판 글쓰기</h3>
  <hr>
    제목 : <input type="text" name="title" style="width:300px;" /><br />
    내용 <br>
    <textarea type="text" name= "body" cols="30" rows="10"></textarea><br>
    
    <!-- submit 은 발송버튼을 의미합니다. -->
    <input type="button" value="돌아가기" onclick="location.href='list.php'">
    <input class = "su" type="submit" value="글쓰기" />

  </form>
</body>
</html>