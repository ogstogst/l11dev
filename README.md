# 環境構築
[参考](https://qiita.com/hitotch/items/2e816bc1423d00562dc2)  

# ページ
[TOP](http://localhost)  

# コマンド
## 起動時
```php
docker compose up -d  
docker compose exec l11dev-app bash  
npm run dev  
```
うまくいかなかったらdocker切って最初からやり直す  

# 要件定義
- ログイン機能
- 記事投稿

# Laravel Breeze
- 最初にインストールする

# strict設定
- バグに気付きやすくなる
- laravel-debuger
- laravel-ide-helper

# Controller
## 作成
```php
php artisan make:controller HelloController
php artisan make:controller Admin/HelloController
```

# Routes
```php
/Users/yutorix/workspace/l11dev/routes/web.php
```

# View
## 作成
```php
php artisan make:view hello
```

## 変数出力
```php
// HTMLエスケープしてくれる！
{{$name}}
```


# 拡張機能
- Laravel Blade formatter
- Laravel Blade Snipetts