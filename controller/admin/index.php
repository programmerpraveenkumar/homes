<?php
class index  extends controller{
    public function __construct($_url){
        parent::__construct();
                $this->adminsession();
            if($this->checkmethodexists($this,$_url)){
                    $this->$_url[2]();
            }else{
                $this->initial();
            }
    }
    public function initial(){
       
                $this->_render();
    }
    private function addtype(){
       $this->view->data=$this->model->call('admin','addtype');
        $this->_render();
        //die('add type');
    }
    public function logout(){
                session::delete('admin');
                header("location:".ADMIN);
    }
    private function _render(){    
        $this->view->render('admin/index');
    }
    private function storetype(){
        $this->model->call('admin','storetype');
    }
}
?>

