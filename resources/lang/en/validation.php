<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
