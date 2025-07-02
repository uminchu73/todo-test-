# Todo アプリ

Todo の新規作成、編集更新、削除までできます。

## Usage

```
git clone git@github.com:uminchu73/todo-test-.git
```

```
docker-compose up -d --build
```

#### Laravel パッケージのダウンロード

```
docker-compose exec php bash
```

```
composer install
```

#### .env ファイルの作成

```
cp .env.example .env
```

```
php artisan key:generate
```

#### .env ファイルの修正

DB_HOST=mysql

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

に書き換える。

#### マイグレーションを実行

```
php artisan migrate
```

#### ブラウザへアクセス

http://localhost/ へアクセスする。
