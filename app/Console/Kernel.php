<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('D1E3B44CC7C50B93AAQAAAAXAAAABGgAAACABAAAAAAAAAD/G8Tb8dB8LF0gZbWaaJt/KT3FA2rRKwc9fym5SXj4uZcv58g4QPV05mOvXHvQonjXiP45lBgeyZySOyJesuu9wnDCjaLL9oSqEJqhisJGX82WJx9EikMbgXl6ODtqMlIg6xZNRBXHRalKAAAAwAIAAD7CFpwudtLgR+reASJ/I5xRbm+Gdlo9zKAZjWgKdeHNy0UvipLeqlDMG5ZqkBoLBC7apHqdC5EQ62i1uXtKyWA98Gr1Qz+Lu1vRf3+iHegiCasTbg/b872JSYAueUIYHWPRuUJ8/Cn/s5d/SvEPwK5bZg0xPl++4F3a1F3X26DUtRqwDXxBVyhaxiPaBkIQZYnwj86gNFTXOHlVhLu6OWDMzUGmayMyG2T1ZDx0TnatjjT4NqWb3+iDVFEgvjQl78tSKXvHZSPQ4Igf+x0yq8x5NGnv+9vSDM8U1dAejlp+ZzU4rMZkj+dVp97ULDgsllgsXPJIld4MAjVUGgIf7Dh8Btgh1wwwQa9ZGNL+0eYPHv2PA1Wrx0Gl+09JrKi8ku+iXobjWlDg1/WqLOnQf1gqYURQe8Cubb12I6pSDE1YXQEC6SsgZIR70LgLXWZ6rHu4EJwrP2m8oSHWj3hsi9Ao7DcEQ5yOgAYtlmnvVjYO3omOY4Wkf9BAYVAPwFIdCgmNf1Z8dfnLLY/ab7Hqz7HPw19xj1tiKjLnn9SL+OpUpDiY52Vm8Giq7i/MMVSQAXvPzDx1gWBZhqjIn0p429jWDDCIXxfyqd7ntR4JEAE5I3t6mKEBO65eNb4wdzvjWrlhlxsvYlAMyVGWj6TtC3UhYkr4wceW7UC0M1HqPNnZXIv4CBNIkO++qL2UmJwZpPEZu/mNFJe1ztUmsMvM+X5J2/IrcG1BCt6glT+nVETlG2WC+m/gZ8BSRiJP2taOP2o4JEZKdOVdxiSCeXx+orInX3FUmYV6WnpJiEfDLWVds4mqxlEM5/UaHtgtJGEiXxl5OmmfEdPiSWau3o9/4+qvOLARYpLz3b27sVzsMrFEbVnM82u4teGzUPgQ8u2Oq38bz67lbd9ZbKwrIc2x3pif+FZrXJh3a8wGBt4Jh0Y/AAAAAA==');
