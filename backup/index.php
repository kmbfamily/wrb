<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
ini_set('max_execution_time',0);	//타임아웃 방지
$address = '';		//maker폴더 index.php의 도메인 주소
$ftp_server = "";	//ftp 주소(http:// 또는 https:// 같은 포트번호는 빼세요.)
$ftp_user = "";		//ftp접속 아이디
$ftp_pass = "";		//ftp 비밀번호
$backdir = "/maker";	//maker폴더 ftp상 경로(ftp로 접속해서 maker폴더까지 경로 복사해서 넣어주세요.)
$img_link = iconv('utf-8','euc-kr',$address);
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $img_link );
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
//백업시작 및 삭제
include 'ftp.php';
echo "<script>alert('백업이 완료되었습니다.');</script>";
?>