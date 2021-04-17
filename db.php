 <?php
  session_start();
  
  $db = new mysqli("localhost","LEE","hacksul2","0811member");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>