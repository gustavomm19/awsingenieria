<?php
  $API_KEY = 'dba6e37b3ddbc6747387505dc31c4c5abdba6f2fabce2243ffb03d0bc16abc06';
  $ip = $_SERVER['REMOTE_ADDR'];
  $data = file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key=$API_KEY&ip=$ip");
  $arr_data = explode(';', $data);
  $code = $arr_data[3];

  $countries_es = array('ES', 'CO', 'VE');


  if(in_array($code, $countries_es)){
    $res = '0';
  }else{
    $res = '1';
  }

  echo $res;
?>