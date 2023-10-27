<?php

$userNum = isset($_POST['userNum']) ? (int)$_POST['userNum'] : 0;

$Msg = '';

if($userNum == 0) {
  $Msg = 'Scegliere una password con un minimo di 8 e un massimo di 32 caratteri';
} elseif($userNum < 8 || $userNum > 32) {
  $Msg = 'Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri';
} else {
  $rand_str = random_str($userNum);
  session_start();
  $_SESSION['passord_generated'] = $rand_str;
  header("Location: ./result.php");
}

// generare una password composta dalla quantità di caratteri indicati
function random_str($userNum, $chars = 'abcde!&quot;&lt;fjklm&eacute;[nop*qrs&ugrave;&pound;$%&amp;/()!&quot;^%$tuvwxyzABCDEFGHIJKLMNO&deg;*&eacute;&ccedil;^&amp;&pound;&quot;/|!&quot;&pound;PQRSTUVWXYZ0123456789') {
  return substr(str_shuffle($chars), 0, $userNum);
}


