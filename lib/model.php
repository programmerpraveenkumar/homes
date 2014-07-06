<?php




class model{
    public $fromControllerToModel=array();
    public function call($modelName,$functionName){            
        $modelName=$modelName.'Model';
        $file='model/'.$modelName.'/'.$modelName.'.php';
        if(file_exists($file)){            
            require_once $file;            
            if(class_exists($modelName)){
                $obj=new $modelName();
                if(is_array($this->fromControllerToModel))
                $obj->fromController=$this->fromControllerToModel;
                return $obj->$functionName();                              
            }
            else{
                die('model is not foound');
            }            
        }
        else{
            echo $file;
            die('model is not found');
        }
    }
    public function __set($key,$value){
        $this->fromControllerToModel[$key]=$value;
    }
}
?>