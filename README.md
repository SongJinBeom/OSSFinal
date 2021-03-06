
#### OSS FINAL

## 오픈소스 소프트웨어 파이널 과제

라즈베리파이를 통해 제 개인 스케줄 관리페이지의 프로토타입을 제작하였습니다.


메인홈페이지에서는 제가 사는 포항의 날씨, 제 스케줄 관리를 위한 달력이 있고 스케줄은 라즈베리파이 서버의 MySQL과 연동이 됩니다.

제가 자주가는 사이트인 히즈넷, 전산전자스터디게시판, 깃허브, 네이버 그리고 구글메일과 네이버메일의 하이퍼링크가 있습니다.

그리고 홈페이지의 개인휴식공간으로 2048게임을 웹상으로 할 수 있도록 넣었습니다.


------------------
- 사용된 오픈소스 
  1. OpenWeatherMap API
    https://openweathermap.org/
  2. 달력
    https://github.com/jamelbaz/FullCalendar-BS3-PHP-MySQL
  3. 2048
    https://github.com/gabrielecirulli/2048

----------------

홈페이지 소개영상

https://youtu.be/bxQOxSRRWac

-------------------

날씨 API의 경우 원래 리턴으로 Json형태로만 주어지는데, 필요한 값들을 추출하여 보기에 편한UI형태로 만들었습니다.

달력의 경우, MySQL과 연동을 하여 기존의 쿼리에서 불필요한 부분을 줄이고 제 페이지에서 관리에 용이하도록 쿼리에 변경을 주었습니다.

---------------

개발도중의 문제점으로 맥북 자체환경에서는 2048과의 연결을 통해 mySQL과 랭킹시스템을 넣으려고 하였으나 라즈베리파이로 서버를 열면 2048과 홈페이지 중간에 포트문제인지 에러가 발생하여 취소하였음 + 게임을 하는 사람이 저밖에 없음을 깨달아서 계획 캔슬  

추후 계획으로는 현재 라즈베리파이서버를 통해 접속하기 때문에 ssh가 되는 맥북, putty를 쓰는 윈도우만 가능하기 때문에 (파이 반납후에)
AWS와 같은 서비스를 사용한다면, 다른 모바일기기나 외부 장소에서도 사용할 수 있도록 할 예정이고
일정관리에 대해서 해당 날짜가 되면 메일로 알림이 오거나, 카카오톡 챗봇을 통해 오도록 시도중에 있습니다.
