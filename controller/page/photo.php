<?php
class photo extends controller{
    private $_fileName,$_no;
        public function __construct($url){            
            parent::__construct();
            $this->_no='photo/no.jpg';
            if($this->checkmethodexists($this, $url)){
                        $this->$url[2]();
                    }
                    else{
                        $this->initial();
                    }
                    
        }
        public function initial(){
            die('the function is not found');
        }
        private function _fileExists(){
        
            if(!file_exists($this->_fileName)){
                return true;
            }
        
        }
        
        public function getindexImagefromsearch(){
            $id=$_GET['id'];
            $this->_fileName='photo/product/'.$id.'/main.jpg';
                    if(!file_exists($this->_fileName)){
                            $this->_fileName=$this->_no;
                    }
                    echo file_get_contents($this->_fileName);//            die();
        }
        public function index(){     
            header("content-type:image/jpeg");
            $id=$_GET['id'];
            $path='photo/images/'.$id.'/';                        
            if(file_exists($path)){                
                $photo=array_values(array_diff(scandir($path),array('.','..')));
                echo file_get_contents($path.$photo[1]);
            }
            else{
                        echo file_get_contents($this->_no);
            }
        }
}
?>