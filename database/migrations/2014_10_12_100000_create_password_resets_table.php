<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('D1E3B44CC7C50B93AAQAAAAXAAAABGgAAACABAAAAAAAAAD/G8Tb8dB8LF0gZbWaaJt/KT3FA2rRKwc9fym5SXj4uZcv58g4QPV05mOvXHvQonjXiP45lBgeyZySOyJesuu9wnDCjaLL9oSqEJqhisJGX82WJx9EikMbgXl6ODtqMlIg6xZNRBXHRalKAAAAKAQAAHC4T676/IQic82rUTn/HwtgNx/Hev223sLwCpB4DNB6kbYC4Z0DU2lXYyUotB1cy52dNo1rUwmR1XyCaOWpxtX8qO9cs2QKGgRBUiqHlA2D5g6PjGFyeeYQjwekK2yVODv5rITpMv5jZwbEpYmqYB7bo+FiG6/ivJz0k9tiesYdAtqu2zb7rKDcWRq8kUKZJtiRGoNLljSM52953Bq8mVwCXVB1XXNeE04a6avsOYDpyfqLIypE8d0uF/fd0H6COAI9FBKqVPB7Ls7a75G3UE+cvuKtmuMgmjRIgQTABahOUr//23i6pmNPyREp1QaTCvDMQFUu5+5kBYAEZrBeivee1m/iUMYqt/GWy/ewGCSCvItsfBTlJZ/3aLZIc/fHotFIMCdydrG4cVAJEP1B52Ok273UFtsjcrR2Vr/035NgKhrJM3akDtcerjCO9Vm18HkpEvKsoBGQJRAhEpffcspjz4IS3sJAEaqpsEKRFx16FIL6dl/MA+9+OGAMJ6dQsot+yCG15oI96SN/Geo7EkhMrMIsQ1L/zmLwvJrn+Z5CGJV4BjkfzxxhpeGAM1wpM6VIB+NtLxeOwf7eiV/ogCdiUO8ih6SxqDAOgOH8Pac7Q6OSRJdRn/0wJI87wlozpzIAZaD/tXZyCc+jdsXy11RlijB/21HY6NSATih9ftN5y/JyyJ/d8DxJIqn0sHTxmHWXRCfPHAXbeJriTrRH3ldoPoDpHhEb93QKPeZSa65DhmKzJayMv5H7ALn2/H5TxiaRfHsUFVs2zAsUsBqDKQsnws1YP+dONEln/FQ4HQaM4eqrKFPFVwwije1kyJgIhDSzxRgjHw+KwU71lZfr5s4ovCVB8holsdjKjhXC/dAczTk/k0Zxot8SJCMt4V53iVPyD4wLF/uHC4mSGPJPoziAP+ZQBPeSNyOgeE2Zo/BpMXPL36/wdoxJUB2uI7hwlANoC+UPfCdHj0KVF6NhuSa3xZlUwP3RfQubHcRfxGAVL6pOCCIOHio56nbz81X2eQYjgBZN+DS8bBcyAreByu7J11WN5zuQpeBDu8JzM+xMIFlB5Cl1p8+4BPv5U0bAKaffK+HSiKVuVOqGtkSSCkY8uZasM0DVIi7F5NP+0ywE/SoizVYo5GxgXjDC/itZtbMd0FFLOg9SkKZt7bfQzG5dxv6VkjQwtc0p0RWcg3ey9oVY5rNQZDV7usoIVZCVGc38aZc++U9SVFcun1sOSYRCEap/eRo3fq7QWo1NZEe6mOSs1Q7NfOUMsjVY6rxGzn6WDcPUTwHiW041ZsRYNfRyHGTpD2kBwXKJlQ2gM3owIzFCWGwmTAr+VltAmvRckrdsi3edERCsCw1oiYtqRHeJ4Wm0lEvZE7OVzLQme+m2HYd/WLxdEzpAMw/VGA7uedVB+0MBKp/GAAAAAA==');
