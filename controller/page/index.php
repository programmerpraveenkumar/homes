<?php
class index extends controller{
        public function __construct($_url){
                            parent::__construct();
        if($this->checkmethodexists($this, $_url)){
            $this->$_url[2]();           
        }
        else{
            $this->initial();
        } 
}
    private function initial(){        
       $this->view->data=$this->model->call('build','index');
       $this->view->render('user/index');
    }
    private function listt(){
        $this->view->render('page/index');
        die('list');        
    }
    private function subcategory(){
        echo $this->model->call('category','selectsubcategory');
    }
}