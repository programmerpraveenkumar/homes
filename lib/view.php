<?php
class view{
    public function render($file){
        $file='view/'.$file.'View.php';        
		
        try{
            
            if(file_exists($file))
                require $file;
            else{
                echo $file.' is not foind';
                throw new \driver\error($file);
            }
        }
        catch(\driver\error $e){
            //echo $file.' is not fdoind from catch'            ;    
            $e->viewnotfound();
        }
    } 
}
?>