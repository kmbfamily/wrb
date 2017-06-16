## 주의사항
* 백업서버의 hdd용량은 운영중인 서버의 용량하고 같거나 더 커야만 합니다.
* 로컬서버의 용량이 부족할시 백업이 중단 또는 실패할수 있습니다,ftp압축파일 및 sql파일을 임시로 저장할 만큼의 hdd용량을 확보하고 백업하세요
* 본 프로그램을 사용하는것에 있어서 데이터의 망실 또는 발생하는 문제에 대해서 개발자는 일절 책임지지 않으며 모든책임은 사용한 본인에게 있습니다.
* 일부 호스팅 업체중 FTP로 업로드및 다운로드시 트래픽에 적용하는 업체가 있으니 사용하기전 호스팅업체에 FTP업로드및 다운로드시 트래픽 소모 되나 문의하시기 바랍니다.
* 서버의 os가 윈도우면 지원하지 않습니다,다만 아파치의 설치로 php가 지원하는 경우는 예외입니다.
* 서버에 본격 적용전 정상작동 하는지 확인이 필요합니다.

## 기능
* 웹 브라우저 접속 한번으로 같은 서버가 아닌 완전히 외부의 타서버로 서버의 모든 데이터를 백업해 줍니다.
* 크론잡(cron jop)을 사용하실 경우 완전 자동백업을 지원합니다.

## 특징
* 본 서버 원격 백업은 실제 운영중인 웹서버의 파일과 db를 zip과 sql형식으로 압축해서 외부 서버로 백업을 해줍니다.
* 브라우저로 접속 한번만 하면 백업을 진행하는것이 특징입니다,만일 크론잡을 사용할 경우 자동으로 백업을 진행해 줍니다.
* .htaccess로 외부인으로 부터 백업중 또는 백업완료된 파일의 접근을 차단합니다.
* 본 소스코드는 php로 만들어 졌으며 php가 돌아가는 서버에서는 거의 대부분 작동하는것이 특징입니다.(웹호스팅이든 서버호스팅 이든 관계없이 작동합니다.)
* 원격지 파일 열기 설정 및 시간제한 하고 전혀 관계없이 작동합니다.

## 사용법
* 백업할 계정에 maker 폴더및 파일 업로드
* 백업한 파일을 받을 계정에 backup 폴더및 파일 업로드

### maker/index.php 수정
* $DB_USER << phpmyadmin로그인시 사용하는 아이디
* $DB_PASS << phpmyadmin로그인시 사용하는 비밀번호
* $DB_NAME << phpmyadmin로그인시 사용하는 DB네임

### backup/index.php 수정
* $address << http://maker폴더가있는 주소/marker/index.php (ex. http://domain.com/maker/index.php )
* $ftp_server << maker가 업로드 되어있는 FTP주소
* $ftp_user << maker가 업로드 되어있는 FTP아이디
* $ftp_pass << maker가 업로드 되어있는 FTP비밀번호
* $backdir << maker업로드가 되어있는 상대적위치( ex. public_html/maker )

## 개발자
* kmbfamily,주영,xenoteam

## 지원
* 공식홈페이지 : http://www.kmbfamily.net/software
* 카카오톡 문의 : https://open.kakao.com/o/gYfBp3w

## 라이선스
Copyright by kmbfamily 2014 All rights reserved http://www.kmbfamily.net
이 프로그램은 자유 소프트웨어입니다.
자유 소프트웨어 재단이 발표 한 GNU 약소 일반 공중 사용 허가서 (GNU Lesser General Public License) 조건에 따라 재배포 및 수정할 수 있습니다.
이 소스코드는 유용 할 것이라는 희망으로 배포되었지만 어떠한 보증도하지 않습니다.
상품성 또는 특정 목적에의 적합성에 대한 묵시적인 보증조차하지 않습니다.
