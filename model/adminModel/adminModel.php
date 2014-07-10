<?php
class adminModel extends database{
    private $tmp;
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
        $data='<form class="form" name="" action="'.ADMIN.'index/storetype" method="post"/>';
        $data.='<div class="separator"><label class="label">Name</label><input class="textbox" type="text" name="type" /></div><div class="submitdiv"><input class="submit_btn" type="submit" name="sub" /></div>';
        return array("title"=>"Add Business Type","data"=>$data);
    }
    public function gettype(){
        $res=$this->onefetchstoredProcedure("sp_admin('select_type','')"); 
    }
    public function edit(){
        
    }
     public function buildinglist(){
    $data=$this->storedProcedure(" sp_build('get_all','')");
    $this->tmp='<div class="grid"><div class="gridrow"><span  class="gridcell">Name</span><span  class="gridcell">Edit</span><span  class="gridcell">Add Photos</span></div>';
        while($res=$data->fetch_object()){
        $this->tmp.='<div class="gridrow"><span class="gridcell">'.$res->title.'</span><span class="gridcell">Edit</span><span class="gridcell"><a href="'.ADMIN.'build/addphtots?id='.$res->id.'">Add Photos</a></span></div>';
        }
        return array("title"=>"title of the page    ","data"=>$this->tmp.'</div>');
    }
    public function storetype(){
     $data=$this->DB_refreshdata($_POST);
     $res=$this->onefetchstoredProcedure("sp_admin('addtype','$data[type]]')");     
     if($res->result=='exist'){
         $this->DB_adminredirect('index/addtype?msg=exist');
     }
     else{
         $this->DB_adminredirect('index/addtype?msg=add_ok');
     }
    }
}
