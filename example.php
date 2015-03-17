<?php 

require_once 'vendor/autoload.php'; // Autoload files using Composer autoload

use DKaefer\DisposableEmail;

$userEmail = "test@gmail.com";
if(DisposableEmail::isDisposableEmail($userEmail)){
  echo 'You are using a disposable email adrdesse';
}else{
  echo 'You are not unsing a disposable email adrdesse';
}