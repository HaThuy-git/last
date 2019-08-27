<?php
  if (empty(getenv("DATABASE_URL"))){
      $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=d4bvd2cc5jlt96', 'iloapxkhzeuvec', '5f71779c31e9a25d696cfe511c87151a96a3bd72a3c35f79e559e8e10c4366f2');
  }  else {
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
  }
?>
