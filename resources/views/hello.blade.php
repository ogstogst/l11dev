<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>welcome</title>
</head>

<body>

  @if (filled($name))
    こんにちは、{{ $name }}さん！
  @else
    名前を入力してください。
  @endif

  <form action="">
    名前: <input type="text" name="name" value="{{ $name }}">

    <input type="submit" value="送信する">
  </form>

</body>

</html>
