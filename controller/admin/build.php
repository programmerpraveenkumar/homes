<?php

class build extends controller{
    public function __construct($_url){
            parent::__construct();
            $this->adminsession();            
        if($this->checkmethodexists($this,$_url)){                        
              $this->$_url[2]();
        }
        else{
            $this->initial();
        }   
    }
    public function initial(){
        $this->add();
    }
    public function add(){        
         $this->view->data=$this->model->call('build','buildmodelform');
        $this->_localrender();
    }
    public function addstore(){
        $this->model->call('build','add');
    }
    public function edit(){   
        
    }
    public function editform(){
        $this->model->call('build','add');        
    }

    private function _localrender() {
        $this->view->render('admin/index');
    }
}
?>