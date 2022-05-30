<?php

$connect = mysqli_connect('localhost', 'root', '');
$result = mysqli_select_db($connect,'book_db');

if($result ==1)
{
    $sql ="create table booktbl (
        BOOK int primary key NOT NULL,
        BOOKNAME varchar(10),
        BOOKPUB varchar(80) )
        default charset=utf8 ";
        $result = mysqli_query($connect, $sql);
} 
else
 {
    echo"<center> 데이터베이스가 존재하지 않습니다. </center>";
 }
    echo "<h3><br><center><br><br><br><br>
    ▣ booktbl 테이블을 성공적으로 만들었습니다.... <br><hr><br>";
    echo "▶ <a href=data_input.php>도서 입력 확인</a> ◀ </center></h3>";
    mysqli_close($connect); //db 연결 종료

?>