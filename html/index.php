<?php
    session_start();
    
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
?>
<html>
    <head>
        <title>Список заявок</title>
	<link rel="stylesheet" href="css/style_index.css" media="screen" type="text/css" />
    </head>
    <body>
        <h1>Список заявок</h1>
        <input type="button" onclick="window.location.href='require.php'" value="Добавить новую заявку">
	<input type="button" onclick="window.location.href='recycle.php'" value="Закрытые">
	<input type="button" onclick="window.location.href='logout.php'" value="Выйти">
<?php
	include_once("db.php");
	$sql = "SELECT `id`, `text_kr`, `type`, `date_end`, `response` FROM `req` WHERE `closed`='opened' ORDER BY `date_end` ASC";
        $query = mysqli_query($db, $sql);
	
	echo '<table border="1">';
  	echo '<thead>';
  	echo '<tr>';
  	echo '<th>Описание заявки</th>';
  	echo '<th>Тип</th>';
  	echo '<th>Дата окончания</th>';
  	echo '<th>Ответственный</th>';
  	echo '</tr>';
  	echo '</thead>';
  	echo '<tbody>';
	while($data = mysqli_fetch_array($query)){ 
    	echo '<tr>';
    	echo '<td>' . $data['text_kr'] . '</td>';
    	echo '<td>' . $data['type'] . '</td>';
	echo '<td>' . $data['date_end'] . '</td>';
	echo '<td>' . $data['response'] . '</td>';
	echo '<td><a title="Изменить" href="require.php?id='. $data['id'].'"><img src="images/edit.png" width="40" 
   height="40" alt="Пример"></a></td>';
	echo '<td><a title="Удалить" href="delete.php?id='. $data['id'].'"><img src="images/delete.png" width="40" 
   height="40" alt="Пример"></a></td>';
    	echo '</tr>';
 	 }
	echo '</tbody>';
  	echo '</table>';
	
?>
    </body>
</html>
