<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>

<body>
  <h1>ログイン画面</h1>
  <form action="todo_login_act.php" method="POST">
    <fieldset>
      <legend>ユーザログイン</legend>
      <div>
        <input type="text" name="username" placeholder="メールアドレスを入力">
      </div>
      <div>
        <input type="text" name="password" placeholder="パスワードを入力">
      </div>
      <div>
        <button>ログイン</button>
      </div>
      <a href="todo_register.php">新規登録</a>
      <a href="todo_read1.php">みんなの行動を閲覧</a>
    </fieldset>
  </form>

</body>

</html>