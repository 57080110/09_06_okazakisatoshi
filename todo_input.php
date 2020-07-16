<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録リスト（入力画面）</title>
</head>

<body>
  <h1>じぶんの行動を登録（入力画面）</h1>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>登録画面</legend>
      <a href="todo_read.php">じぶんの行動一覧</a>
      <a href="todo_logout.php">ログアウト</a>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>