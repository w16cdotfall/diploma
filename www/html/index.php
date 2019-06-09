<?php
    session_start();
    
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
?>
<html>
    <head>
        <title>Список заявок</title>
    </head>
    <body>
        <h1>Список заявок</h1>
        <input type="button" onclick="window.location.href='require.php'" value="Добавить новую заявку">
<input type="button" onclick="window.location.href='logout.php'" value="Выйти">
    </body>
</html>
