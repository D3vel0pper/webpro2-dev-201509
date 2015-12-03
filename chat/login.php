<?php
  /**
    1. pick up login_id from parameter
    2. check it already registered
    3-a. it exists, pick up from DB and move to Logined session.
    3-b. it doesn't exists, register to DB and move to Logined session.
  */
  function redirect_to(url){
    header("Location: ${url}",TRUE,301);
  }

  if(!isset($_POST['login_id'])) {
    redirect_to("index.php");
    return;
  }

  $login_id = $_POST['login_id'];
  $pdo = new PDO('mysql: host=127.0.0.1;dbname=chat;charset=utf8;','root','');
  $stmt = $pdo->prepare('SELECT * FROM users WHERE login_id = ?');
  if($stmt->execute(array($login_id))) {
    if($row = $stmt->fetch()) {
      var_dump($row);
      $found = $row['id'];
    } else {
      print("not found");
      $found = FALSE;
    }
  }


?>
