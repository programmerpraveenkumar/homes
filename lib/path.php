<?php

class path{
    
    public function __construct(){
                $url=explode('/',$_SERVER['PHP_SELF']);
		if($url[1]!='index.php'){
			define("PATH",'http://'.$_SERVER['HTTP_HOST'].'/'.$url[1].'/');
		}
		else{
			define("PATH",'http://'.$_SERVER['HTTP_HOST'].'/');			
		}               
		define("INCLUDE_FILE",PATH.'public/');
                define("PAGE_PATH",PATH.'page/');
		define("ADMIN",PATH.'admin/');
		define("ADMININCLUDE",INCLUDE_FILE.'admin/');
                //define("USER",PATH.'user/');
                define("PHOTO_PATH",PATH.'photo/');
    }
    
}
?>