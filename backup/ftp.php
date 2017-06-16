<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
if ((!$conn_id) || (!$login_result)) {
echo "Ftp connection has failed!";
echo "Attempted to connect to $ftp_server for user $ftp_user";
die;
} else {
echo "Connected to $ftp_server, for user $ftp_user<br/-->";
}
ftp_pasv($conn_id, true);
/*
원격서버에는 절대경로가 아닌 폴더명으로 해야 합니다.
FTP에 접속했으니 기본 폴더명부터 시작해야 합니다.
지금 접속 한거에요 쨔응! 알드라이브로 ftp 처음 접속하신거 생각하세요.
*/
ftp_chdir($conn_id,$backdir);  //처음 접속 지점에서 백업파일이 담긴 폴더로 넘어가요!
$server_file = "backupsqli.sql";  //서버에서 가져올 파일 이름
$local_file = "./data/backupsqli_".date("YmdHi").".sql";   //백업서버에 저장할 이름 및 경로!
ftp_get($conn_id, $local_file, $server_file, FTP_BINARY);
ftp_delete($conn_id,$server_file);  //삭제 명령
$server_file = "backup.sql";  //서버에서 가져올 파일 이름
$local_file = "./data/backup_".date("YmdHi").".sql";   //백업서버에 저장할 이름 및 경로!
ftp_get($conn_id, $local_file, $server_file, FTP_BINARY);
ftp_delete($conn_id,$server_file);  //삭제 명령
$server_file = "backup.zip";  //서버에서 가져올 파일 이름
$local_file = "./data/backup_".date("YmdHi").".zip";   //백업서버에 저장할 이름 및 경로!
ftp_get($conn_id, $local_file, $server_file, FTP_BINARY);
ftp_delete($conn_id,$server_file);  //삭제 명령
ftp_quit($conn_id);
?>