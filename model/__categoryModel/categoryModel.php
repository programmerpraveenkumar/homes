<?php
use driver\categoryDRIVER as categoryDRIVER;
class categoryModel extends database{
    private $_tmp;
    public function categoryDriver(){
        return new categoryDRIVER();
    }
    private function _categoryform($type=''){
        return '<form class="form" method="post" action="'.ADMIN.'category/action?type='.$type.'" name="category" onsubmit="return validation(\'category\',{0:[\'name\',\'empty\']})">';
    }
    public function addForm(){
        $data=$this->_categoryform('add').'<div class="separator"><label class="label">Category Name</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Add Category","data"=>$data);
    }
    public function deleteForm(){
      $data=$this->_categoryform('delete').'<div class="separator"><label class="label">Select Category</label><select class="select" name="name"><option value="">--select category--</option>'.$this->categoryDriver()->option().'</select><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Delete Category","data"=>$data);  
    }
    public function updateForm(){
        $data=$this->_categoryform('delete').'<div class="separator"><label class="label">Select Category</label><select class="select" name="id"><option value="">--select category--</option>'.$this->categoryDriver()->option().'</select><span id="error_id"></span></div><div class=" separator "><label class="label">New Name</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Update Category","data"=>$data);       
    }
    public function subaddForm(){
        $data=$this->_categoryform('subadd').'<div class="separator"><label class="label">Select Category</label><select class="select" name="id"><option value="">--select category--</option>'.$this->categoryDriver()->option().'</select><span id="error_id"></span></div><div class=" separator "><label class="label">New Name</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Add Sub Category","data"=>$data);       
    }
    public function subaddstore(){
        $this->_subcategorymodel('add');
    }
    private function _subcategorymodel($type){
        $data=$this->DB_refreshdata($_POST);
        switch($type){
            case 'add':
                $path='add';
                $this->_tmp="sp_category('subadd','\'$data[name]\',\'$data[id]\'')";
            break;
            case 'edit':
                $path='edit';
                $this->_tmp="sp_category('update','name=\'$data[name]\' where id=$data[id]')";
            break;
            case 'delete':
                $path='delete';
                $this->_tmp="sp_category('delete','$data[name]')";
            break;        
        }
        $this->storedProcedure($this->_tmp);
        $this->DB_adminredirect('category/sub?type='.$path.'&msg=add_ok');        
    }
    public function select(){
        $data=$this->categoryDriver()->get();
        while($get_res=$data->fetch_object()){
            print_r($get_res);
        }
        //die();
    }
    public function add(){
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('add','$data[name]')");
        $this->DB_adminredirect('category/?type=add&msg=add_ok');        
    }
    public function update(){     
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('update','name=\'$data[name]\' where id=$data[id]')");
        $this->DB_adminredirect('category/?type=update&msg=update_ok');        
    }
    public function delete(){     
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('delete','$data[name]')");
        $this->DB_adminredirect('category/?type=delete&msg=del_ok');        
    }
    public function selectsubcategory(){
       //$data=$this->DB_refreshdata($_GET);
       $data=$_GET;
       $res=$this->storedProcedure("sp_category('subcategory','$data[id]')");
       while($data=$res->fetch_object()){
           $this->_tmp.='<option value="'.$data->id.'">'.$data->name.'</option>';
       }
       return $this->_tmp;
    }
    
}
?>