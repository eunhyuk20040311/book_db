<?php

$Book = $_POST['book'];
$Bookname = $_POST['bookname'];
$Bookpub = $_POST['bookpub'];

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'book_db');

/* -------- PHP와 MySQL 한글 깨짐 방지 -------- */

mysqli_query($connect,"set session character_set_connection=utf8;");
mysqli_query($connect,"set session character_set_results=utf8;");
mysqli_query($connect,"set session character_set_client=utf8;");

$sql="insert into booktbl (Book, Bookname, Bookpub) ";
$sql.= "values('$Book', '$Bookname', '$Bookpub')";

mysqli_query($connect, $sql) ; //sql 질의 수행
mysqli_close($connect); //db 연결 종료

echo "<center><h3><br><br>등록 완료. 축하드립니다.<br><br><hr><br>";
echo "이동할 화면을 선택하세요.<br><br>";
echo "◀◀ [ <a href='data_input.php'>도서 입력</a> ]&nbsp; ㅣ &nbsp;";
echo "[ <a href='data_output.php'>결과 화면</a> ] ▶▶</h3></center>" ;

?>