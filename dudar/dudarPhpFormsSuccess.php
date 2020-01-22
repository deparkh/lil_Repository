<?
  session_start();
  if($_GET["send"]==1)
  echo "Вы усепшно отправили сообщение на email ".$_SESSION["to"];
?>
