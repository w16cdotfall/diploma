<?php
    session_start();
    
    if(isset($_POST['login'])){
        include_once("db.php");
	// убираем тэги
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        // убираем слэши
        $username = stripslashes($username);
        $password = stripslashes($password);
        // убираем последовательности
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        // хэшируем пароль
        $password = md5($password);
        // 
        $sql = "SELECT * FROM `users` WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];
        
        if($password = $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        }
        else{
		
            	echo '<script type="text/javascript">';
		echo 'alert("Логин или пароль введены некорректно!!!")';
		echo '</script>';
		
        }
    }
?>
<html>
    <head>
        <title>Страница авторизации системы контроля заявок</title>
<link rel="stylesheet" href="css/style_login.css" media="screen" type="text/css" />
    </head>
    <body>
        
	
	<div id="login-form">
      <h1>АВТОРИЗАЦИЯ</h1>
        <fieldset>
            <form action="login.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" required value="Логин" autofocus onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' "> 
                <input type="password" name="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' "> 
                <input type="submit" value="ВОЙТИ" name="login" autocomplete="off">
            </form>
        </fieldset>
    </div> 

    </div>
    </body>
</html>
