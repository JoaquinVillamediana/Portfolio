<?php
ini_set();
header('Content-Type: application/json');
if( empty($_POST['Nombre']) || empty($_POST['Correo']) || empty($_POST['Mensaje']))
{
  echo json_encode('error');
  die;
}
mail("joacovillamediana@gmail.com", 'Tienes un nuevo mensaje de tu pagina','"'.$_POST['Nombre'].'" de "'.$_POST['Correo'].'" : "'.$_POST['Mensaje'].'"');
echo json_encode('success');

  ?>