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
     $data.=$this->_formfield(array("type"=>"file","name"=>"images[]","label"=>"Images","attributes"=>"multiple=\"mulitple\""));
     $data.=$this->_formfield(array("type"=>"file","name"=>"floor_images[]","label"=>"Floor Images","attributes"=>"multiple=\"mulitple\""));
     $data.=$this->_formfield(array("type"=>"file","name"=>"3dimages","label"=>"3D Image"));
     $data.=$this->_formfield(array("type"=>"select","name"=>"type","label"=>"Select Type","value"=>$this->_getType()));
     $data.=$this->_formfield(array("type"=>"textarea","name"=>"description","label"=>"Description"));
     $data.=$this->_formfield(array("type"=>"button","name"=>"submit","value"=>"Store"));          
      $form='<form name="" action="'.ADMIN.'build/addstore" class="form"/>'.$data.'</form>';
        return array("title"=>"Building add Form" ,"data"=>$form);
    }
    private function _getType(){
      return  $this->buildDriver()->option();
    }
    public function buildstore(){
            $data=$this->DB_refreshdata($_POST);
            $res=$this->onefetchstoredProcedure("sp_build('add','(title,price,bathroom,bedroom,garages,type,description)values(\'$data[title]\',\'$data[price]\',\'$data[bedroom]\',\'$data[bathroom]\',\'$data[garages]\',\'$data[type]\',\'$data[description]\')')");                
            print_R($res);
    }
    
}
?>