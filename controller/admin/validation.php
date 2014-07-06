<?php
class validation extends controller{
        public function __construct($_url){
               parent::__construct();
                       $this->admin();

        }
        public function admin(){
            $this->model->call('admin','adminvalidation');
        }
}

