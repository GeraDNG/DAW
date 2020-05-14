<?php

  function loadJson($path){
    if($data = @file_get_contents($path)){
        return json_decode($data, true);;
    }
    return false;
  }

  function writeJson($path,$data){
    if(!empty($data)){
        return @file_put_contents($path, json_encode($data));
    }
    return false;
  }

?>
