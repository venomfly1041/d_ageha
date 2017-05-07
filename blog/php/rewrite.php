<?php

function rewrite(){
  $data=explode('/', getenv('REQUEST_URI'));
  return $data;
  }




?>