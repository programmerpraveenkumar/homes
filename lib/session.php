<?php

class session{
	public  static function set($KEY,$VAL){
		@session_start();
		$_SESSION["$KEY"]=$VAL;	
	}	
	public static function delete($KEY){
		@session_start();
		unset($_SESSION["$KEY"]);
                return true;
	}
	public static function check($KEY){
		@session_start();
		if(isset($_SESSION["$KEY"])){
			return true;
		}
		else{
			return false;
		}
	}
        public static function get($key){
            @session_start();
            return $_SESSION["$key"];
        }
}
?>