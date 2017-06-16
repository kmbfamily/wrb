<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
$BACKUP_NAME = 'backup.sql'; //생성될 백업 db명
$command = 'mysqldump -h'.$DB_HOST.' -u'.$DB_USER.' -p'.$DB_PASS.' '.$DB_NAME.' > '.$BACKUP_NAME;
system($command);
?>