<?php

if((!defined('z'))){ define('z','0');  }
     
$SecDIR     = 'subspace';
$BasePATH   = '/';
$FILE       = 'baseurl.php'; 
$LoadPATH   = './'.$FILE;
	
$SecPATH    = __DIR__;
$SecPATHARR = explode("/", $SecPATH);
unset($SecPATHARR[0]);
	
foreach($SecPATHARR as $ARRVAL){
  $BasePATH = $BasePATH.$ARRVAL.'/';
  if($ARRVAL == $SecDIR){
    $LoadPATH	= $BasePATH.$FILE;
    break;
    }
}

@include($LoadPATH);

exit;
?>
