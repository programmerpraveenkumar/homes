<?php
    class database {
protected $mysql;
 protected $last_id;
    private $data=array("user"=>'root','pass'=>'','database'=>'shop','host'=>'localhost');
	public function database(){	
            
		$this->mysql=new mysqli($this->data["host"],$this->data["user"],$this->data["pass"],$this->data["database"]);
		if($this->mysql->connect_errno > 0)
			die($this->mysql->connect_error);
	}	
	public function storedProcedure($query){             
//$qur="CALL ".$query;die($qur);
		$sto=$this->mysql->query("CALL ".$query); 
                
		if($sto)
			return $sto;
		else{
                    if($this->mysql->errno=='1451'){
                         return false;
                    }
                    if(DEBUG){         
                        echo "<span style=\"color:red;\">CALL ".$query.'</span>';
                    die("line 25 error from model->database ".$this->mysql->error);
                    }
                else
                    return false;
		}
				
	}
        public function onefetchstoredProcedure($query){
              $res=$this->storedProcedure($query);
              $data=$res->fetch_object();
              return $data;
        }
	public function freeResult(){
		$this->mysql->next_result();
	}
        public function DB_freeResult(){
            $this->freeResult();
            
        }
        protected function DB_redirect($url){
            header("location:".$url);
        }
        protected function DB_adminredirect($url){
            header("location:".ADMIN.$url);
        }
        
        protected function DB_refreshdata($data){
            $tmp='';
            foreach($data as $obj  =>$val){
                if(!is_array($val)){
                    $tmp=trim($val);
                    $tmp=addslashes($tmp);
                    $tmp=$this->mysql->real_escape_string($tmp);
                    $_POST[$obj]=$tmp;
                }
            }
            return $_POST;
        }
        protected function DB_sizeCheck($getwidth=array(),$getheight=array(),$image){
            list($width,$height)=getimagesize($image);              
//            print_r($getwidth);
//            echo $width;
//            echo '</br>height';
//            print_r($getheight);
//            echo $height;
//            echo '</br>';
//            die();
            if(($width>=$getwidth["min"] && $width<=$getwidth["max"])&&($height>=$getheight["min"] && $height<=$getheight["max"])){
                   return true;
             }else{
                return false;
             }
             
        }
        public function DB_mail($email='admin@fastmobileindia.com',$content=''){    
        $mailid =$email;
		define("SITE_URL","ADMIN FAST MOBILE");
		//define("SITE_URL","http://wice.org.in");
		$headers = "From: ".SITE_URL."\r\n";  
		
		$headers .= "MIME-Version: 1.0\r\n"  . "Content-Type: text/html; \r\n"  . "Content-Transfer-Encoding: 7bit\r\n"; 
		
		 $message="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<title>ACTIVATION:FASt MOBILE </title>
		<style type='text/css'>
		 
		.style23 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
		.style36 {font-size: 12}
		.style38 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
		.style47 {font-family: Geneva, Arial, Helvetica, sans-serif}
		.style48 {color: #993333}
		.style50 {
		 font-family: Verdana, Arial, Helvetica, sans-serif;
		 font-size: 12px;
		 color: #993333;
		 font-weight: bold;
		}
		.style56 {
		 font-family: Geneva, Arial, Helvetica, sans-serif;
		 font-size: 12px;
		 color: #993333;
		 font-weight: bold;
		}
		.style59 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px; color: #993333; }
		.style60 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #dbf1fe; }
		.style61 {font-size: 12px}
		 
		</style>
		</head>
		
		<body>
		<form id='form1' name='form1' method='post' action=''>
		  <table width='74%' border='0' align='center' cellpadding='5' cellspacing='0' bordercolor='#993333'>
		   
			<tr>
			  <td><table width='100%' border='0' cellpadding='5' cellspacing='0'>
			  <tr>
				<td width='30%'><b>Your account is $content,</b></td>
				
			   </tr>											
				</table></td>
			</tr>
		  </table>
		</form>
		</body>
		</html>";
                 $result = @mail($mailid,"Enqiry from Client",$message,$headers);
    }
    public function DB_getscandir($dir){
                        return array_values(array_diff(scandir($dir),array('.','..')));
    }    
    }
?>

