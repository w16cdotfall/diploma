
<html>
<head>
<title>подтверждение удаления</title>
</head>
<body>
<?php
$label = 'id';
$id = false;
if (  !empty( $_GET[ $label ] )  )
{
  $id = $_GET[ $label ];
}
echo $id;
echo '<p>Вы действительно хотите удалить заявку?</p>';

echo '<input type="button" value="Да"  onclick="window.location.href=`delete_yes.php?id='.$id.'`">';
echo '<input type="button" value="Hет" onclick="history.back();">';
?>
</body>
</html>
