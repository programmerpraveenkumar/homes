<?php
use driver\buildDRIVER as buildDriver;
class buildModel extends database{
    private function buildDriver(){
        return new buildDRIVER();
    }
    private function _formfield($details=array()){
        $default=array("onclick"=>"","value"=>"","attributes"=>"");
        $details=array_merge($default, $details);  
        switch($details['type']){
            case 'textbox':
                $this->_tmp='<input class="textbox" type="text" name="'.$details["name"].'" value="" />';
            break;
            case 'select':
                $this->_tmp='<select class="textbox" '.$details["attributes"].'  name="'.$details["name"].'"><option value="">--select one option----</option>'.$details["value"].'</select>';
            break;
            case 'button':
                $this->_tmp='<input type="button" onclick="'.$details["onclick"].'" class="submit_btn" value="'.$details["value"].'" class="textbox" name="'.$details["name"].'" />';
            break;
            case 'textarea':
                $this->_tmp='<textarea class="textarea"  name="'.$details["name"].'"></textarea>';
            break;
            case 'file':
                $this->_tmp='<input class="textbox" '.$details["attributes"].' type="file" name="'.$details["name"].'" />';
            break;
            case 'custom':
             return $details["values"];            
            break;
        }
        return '<div class="separator"><label class="label">'.$details["label"].'</label>'.$this->_tmp.'<span id="error_'.$details["name"].'"></span></div>';
    }
    public function buildmodelform(){
     $data=$this->_formfield(array("type"=>"textbox","name"=>"title","label"=>"Title"));
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"price","label"=>"Price"));
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"location","label"=>"Location"));    
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"bathroom","label"=>"Bathroom"));
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"bedroom","label"=>"Bedroom"));    
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"garages","label"=>"Garages"));     
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"video","label"=>"video"));
     $data.=$this->_formfield(array("type"=>"textbox","name"=>"map","label"=>"Map"));
     //$data.=$this->_formfield(array("type"=>"file","name"=>"images","label"=>"Mian Image"));
     //$data.=$this->_formfield(array("type"=>"file","name"=>"floor_images[]","label"=>"Floor Images","attributes"=>"multiple=\"mulitple\""));
     $data.=$this->_formfield(array("type"=>"file","name"=>"3dimage","label"=>"3D Image"));
     $data.=$this->_formfield(array("type"=>"select","name"=>"type","label"=>"Select Type","value"=>$this->_getType()));
     $data.=$this->_formfield(array("type"=>"textarea","name"=>"description","label"=>"Description"));
     $data.=$this->_formfield(array("type"=>"button","name"=>"submit_btn","value"=>"Store","onclick"=>'ajaxvalidation({\'name\':\'buildmodel\',\'type\':\'submit\'},{\'1d\':[\'title\',\'empty\'],\'2d\':[\'price\',\'empty\'],\'3d\':[\'location\',\'empty\'],\'bathd\':[\'bathroom\',\'empty\'],\'bedthd\':[\'bedroom\',\'empty\'],\'garges\':[\'garges\',\'empty\'],\'videobathd\':[\'video\',\'empty\'],\'mapm\':[\'map\',\'empty\'],\'3dimages\':[\'3dimage\',\'empty\'],\'typdes\':[\'type\',\'empty\'],\'desd\':[\'description\',\'empty\']})'));          
     $form='<form enctype="multipart/form-data" name="buildmodel" method="post" action="'.ADMIN.'build/addstore" class="form"/>'.$data.'</form>';
        return array("title"=>"Building add Form" ,"data"=>$form);
    }
    public function buildstore(){
       $data=$this->DB_refreshdata($_POST);
        
        $res=$this->onefetchstoredProcedure("sp_build('add','(title,price,map,bathroom,bedroom,garages,type,description,location)values(\'$data[title]\',\'$data[price]\',\'$data[map]\',\'$data[bathroom]\',\'$data[bedroom]\',\'$data[garages]\',\'$data[type]\',\'$data[description]\',\'$data[location]\')')");       
        if($res->result=='ok'){
            if(isset($res->id)){
                if(isset($_FILES['3dimage']['name'])){
                    $this->moveImage('3d/'.$res->id.'.jpg',$_FILES['3dimage']['tmp_name']);
                }
                $this->DB_adminredirect('build/add?msg=add_ok');
            }
            
            return false;
        }
        $this->DB_adminredirect('build/add?msg=add_err');
        
    }
    private function imageStore($name){
        $id=$_GET['id'];
        switch($name){
            case 'floor':
            $data=array("name"=>"floor","path"=>"floor");
            break;
            case '3d':
            $data=array("name"=>"3d","path"=>"3d");
            break;
            default :
            return false;            
        }
        $path=$data['path'].'/'.$id.'/';
        if(!file_exists('photo/'.$path)){
            mkdir($path);            
        }
        $count=count($_FILES['images']['name']);
        for($i=0;$i<$count;$i++){
            $this->moveImage($path.'/'.uniqid().'.jpg',$_FILES['images']['tmp_name'][$i]);
        }
        die('last line');
    }
    
    private function _getType(){
      return  $this->buildDriver()->option();
    }
    /*client side*/
    public function search(){
        $data=$_GET;        
        $res=$this->storedProcedure("sp_build('search','location=\'$data[location]\' and price between $data[min] and $data[max]')");
    }
    public function getprocuctalone(){
      $data=$_GET[id];
      $res=$this->onefetchstoredProcedure("sp_build('get_id','$id')");  
      print_r($res);
      die('end get product alone');
    }
    
}
?>