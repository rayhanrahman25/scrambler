<?php
function displayKey($key){
    printf("value='%s'",$key);
}


function displayEncode($main_data, $key){
      $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
      $data = '';
      $length = strlen($main_data);
      for($i=0; $i<$length; $i++){
          $data_main = $main_data[$i];
          $position = strpos($original_key,$data_main);
          if($position !== false){
              $data.= $key[$position];
          }else{
              $data.= $data_main;
          }
      }
      return $data;
}
function displayDecode($main_data, $key){
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($main_data);
    for($i=0; $i<$length; $i++){
        $data_main = $main_data[$i];
        $position = strpos($key,$data_main);
        if($position !== false){
            $data.= $original_key[$position];
        }else{
            $data.= $data_main;
        }
    }
    return $data;
}

