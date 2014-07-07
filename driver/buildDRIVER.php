<?php
namespace driver;
class buildDRIVER extends \database{
    private  $_tmp;
    public function get(){
        return $this->storedProcedure("sp_admin('select_type','')");        
    }
    public function option(){
        $res=$this->get();
        while($data=$res->fetch_object()){
            $this->_tmp.='<option value="'.$data->id.'">'.$data->content.'</option>';
        }
        return $this->_tmp;
    }
    public function optionwithnames(){
        $res=$this->get();
        while($data=$res->fetch_object()){
            $this->_tmp.='<option value="'.$data->name.'">'.$data->name.'</option>';
        }
        return $this->_tmp;
    }
    public function DEP__leftMenu(){
        $data=$this->get();
        while($res=$data->fetch_object()){
            $this->_tmp.='<li><a href="'.PAGE_PATH.'search/?category='.$res->name.'">'.$res->name.'<i class="icons icon-right-dir"></i></a></li>';
        }
        return $this->_tmp;
    }
        
}

?>

