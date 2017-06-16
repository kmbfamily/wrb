<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
ini_set('max_execution_time',0);
$DB_HOST = 'localhost';	//db호스트명,일반적인 경우는 127.0.0.1 또는 localhost를 적습니다.
$DB_USER = '';		//db아이디
$DB_PASS = '';		//db비밀번호
$DB_NAME = '';		//db이름
$data ="../";		//압축하고 싶은 폴더의 상대경로
//ex:이 파일을 담겨져 있는 폴더를 압축할거면 경로는 "../폴더이름", ../는 폴더 위 한칸 나가는 명령입니다.
//ex:이 파일하고 같은 폴더 안에있는 폴더를 압축할거면 경로는 "폴더이름"
include('zip.php');	//ftp파일 백업 부분,ftp파일 백업을 원하지 않으면 주석처리 하세요.
include('db.php');	//db백업 부분,db백업을 원하지 않으면 주석 처리 하세요.
include('dbsqli.php');	//db sqli방식 백업 부분,sqli방식 백업을 원하지 않으면 주석 처리 하세요.
?>