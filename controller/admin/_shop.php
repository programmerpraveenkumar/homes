<?php
class shop extends controller{
    public function __construct($_url){
        parent::__construct();
        $this->adminsession();
            if($this->checkmethodexists($this,$_url)){
                  $this->$_url[2]();
            }else{
                $this->initial();
            }
    }
    private function initial(){        
        $this->view->data=$this->model->call('shop','addform');
        $this->view->render('admin/index');
    }
    private function indexproduct(){
        die('index product');
    }
    private function sliderimage(){        
        $this->view->data=$this->model->call('shop','sliderimageform');
        $this->view->render('admin/index');
    }
    private function productstore(){
        $this->model->call('shop','shopstore');
    }
    private function sliderimagestore(){
        $this->model->call('shop','sliderimagestore');
    }
    private function edit(){        
        $this->view->data=$this->model->call('shop','geteditshoplist');
        $this->view->render('admin/index');        
    }
    private function editshop(){
        $this->view->data=$this->model->call('shop','geteditshopForm');
        $this->view->render('admin/index');        
    }
    private function sliderimagedelete(){
        $this->model->call('shop','sliderimagedelete');
    }
}

