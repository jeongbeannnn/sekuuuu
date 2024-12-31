# sekurity.online
 웹 해킹 실습 사이트입니다.

# github commit


Git 초기화: /var/www/html/ 디렉토리에서 Git 저장소를 초기화합니다.

```
cd /var/www/html/
git init
```
GitHub 레포지토리 클론: 원격 GitHub 레포지토리를 클론합니다. 이 레포지토리는 원격 저장소로 업데이트된 내용을 받을 때 사용됩니다.

```
sudo git clone https://github.com/chdonghui/sekurity_online.git
```
로컬에서 작업: /var/www/html/ 디렉토리에서 필요한 파일을 수정하거나 추가합니다.

변경사항 스테이징: 변경사항을 스테이징 영역에 추가합니다.

```
git config --global --add safe.directory /var/www/html/sekurity_online
sudo git add .
```
커밋: 스테이징된 변경사항을 커밋합니다.


```
git commit -m "커밋 메시지"
```
"커밋 메시지" 부분에는 커밋의 목적을 간결하게 설명하는 내용을 작성하세요.

GitHub에 푸시: 로컬에서 커밋한 내용을 원격 GitHub 레포지토리에 푸시합니다.

```
sudo git pull https://github.com/chdonghui/sekurity_online.git
git push origin main
```
여기서 origin은 원격 레포지토리의 이름이고, master는 브랜치 이름입니다. 브랜치 이름은 프로젝트에 따라 다를 수 있습니다.
"# sekuuuu" 
