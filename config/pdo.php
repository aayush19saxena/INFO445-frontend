<?php
  try {

    $db_dsn = "mssql:host=IS-HAY04.ischool.uw.edu;dbname=airline_aayush_vansh";
    $db_user = "INFO445";
    $db_pass = "GoHuskies!";
    $pdo = new PDO( $db_dsn, $db_user, $db_pass, array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, ) );
    $data = $pdo->prepare("SELECT COUNT(*) FROM flight");
    $result = $data->fetchAll();
    echo $result;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
?>
