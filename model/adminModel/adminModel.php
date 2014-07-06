<?php
class adminModel extends database{
    public function adminvalidation(){
                $data=$this->DB_refreshdata($_POST);
        if($data['username']=='admin' && $data['password']=='admin'){
            session::set('admin','admin');
            $this->DB_adminredirect('index');
            return false;
        }
        $this->DB_adminredirect('index/?msg=error');
    }
    public function addtype(){        
        $data='<form class="form" name="" action="" method=""/>';
        $data.='<div class="separator"><label class="label">Name</label><input class="textbox" type="text" name="type" /></div><div class="submitdiv"><input class="submit_btn" type="submit" name="sub" /></div>';
        return array("title"=>"Add Business Type","data"=>$data);
    }
    public function edit(){
        
    }
}
