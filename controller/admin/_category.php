<?php
class category extends controller{
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
            if(!isset($_GET['type'])){
                $this->view->data=$this->model->call('category','addForm');
             
            }else{
             switch($_GET['type']){
            case 'add':
                $this->view->data=$this->model->call('category','addForm');
            break;
            case 'update':
                $this->view->data=$this->model->call('category','updateForm');
            break;
            case 'delete':
         
                $this->view->data=$this->model->call('category','deleteForm');
            break;
            default:
                
            $this->view->data=$this->model->call('category','addForm');
            break;
        }
            }
         
            $this->view->render('admin/index');
        }
                private function sub(){                    
                        if(!isset($_GET['type'])){
                            $this->view->data=$this->model->call('category','subaddForm');

                        }else{
                         switch($_GET['type']){
                        case 'add':
                            $this->view->data=$this->model->call('category','subaddForm');
                        break;
                        case 'update':
                            $this->view->data=$this->model->call('category','updateForm');
                        break;
                        case 'delete':

                            $this->view->data=$this->model->call('category','deleteForm');
                        break;
                        default:

                        $this->view->data=$this->model->call('category','addForm');
                        break;
                    }
            }
         
            $this->view->render('admin/index');
        }

        private function action(){
            switch($_GET['type']){
               case 'add':
                  $this->model->call('category','add');
               break;
               case 'update':
                   $this->model->call('category','updateForm');
               break;
               case 'delete':                   
                   $this->model->call('category','delete');
               break;
               case 'subadd':
                  $this->model->call('category','subaddstore');
               break;
               default:
                   die('you click here to go back');
               break;
           }
             
        }
        private function addstore(){           
            $this->model->call('category','addstore');
        }
}
?>