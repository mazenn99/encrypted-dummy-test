<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
