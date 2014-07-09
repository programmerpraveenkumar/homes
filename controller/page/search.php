<?php
class search extends controller{
    public function __construct($url){
        parent::__construct();
        if($this->checkmethodexists($this, $url)){
             $this->$url[2]();                
        }
        else{
             $this->initial();                
        }
    }
    private function initial(){
//        print_r($_GET);
        //call sp_product('product_search','testw')
        $this->view->data=$this->model->call('build','search');
        $this->localRender();
    }
    private function productalone(){
        $this->view->data=$this->model->call('build','getprocuctalone');       
                $this->localRender();
    }
    private function alone(){
        $this->view->data=$this->model->call('build','getprocuctalone');       
        $this->view->render('user/single');
    }
    private function localRender(){
        $this->view->render('user/search');
    }
    
}
?>