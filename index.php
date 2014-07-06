<?php
error_reporting(0);
class load{
    public static function lib($class){
        $file='lib/'.$class.'.php';
        if(file_exists($file)){
            require $file;
        }
        else{
            return false;
        }        
    }
    public static function driver($class){
        $file=$class.'.php';
        $file=str_replace('\\','/',$file);                
        if(file_exists($file)){            
             require $file;
        }
        else{
            echo $file .' is not found';
             return false;
        }     
    }   
    
}

spl_autoload_register(array('load','lib'));
spl_autoload_register(array('load','driver'));
new path();
new bootstrap();
?>