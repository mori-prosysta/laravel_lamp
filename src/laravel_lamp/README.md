## 開発環境
### 環境情報
Laravel：6.20\
php：7.4\
WEB:apache\
DB:MySQL\
開発環境：Docker

### 開発環境構築手順
前提：Dockerがインストールされていること
```angular2html
・ソースコードを格納したいフォルダに移動（app_nameは任意のアプリ名）
cd app_name

・このリポジトリをgit cloneで持ってくる
git clone https://github.com/mori-prosysta/laravel_lamp.git

・.envファイルの作成
cp .env.sample .env

==ここからDockerでの作業==
・Dockerを起動します

・コンテナ作成
docker-compose build

・コンテナを起動
docker-compose up -d

・コンテナに入る
docker exec -it laravel_lamp_web bash

・アプリがあるディレクトリへ移動
cd laravel_lamp

・権限付与
chmod 777 -R storage/

・キー作成
php artisan key:generate
```
