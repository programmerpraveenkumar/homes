<?php
use driver\categoryDRIVER as categoryDRIVER;
class userModel extends database{
    private $_tmp;
    public function categorydriver(){
        return new categoryDRIVER();
    }
    public function index(){
        //<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
        return array("categorylist"=>$this->categorydriver()->optionwithnames(),"categoryleft"=>$this->categorydriver()->leftMenu(),
            "product"=>$this->_getproductlist(),
            "topslider"=>$this->_slider(),
                
                );
    }
    private function DEP___categorytoselect(){
        $this->categorydriver()->option();
    }
    private function _slider(){
        $this->_tmp='';
        $data=$this->DB_getscandir('photo/slider');        
                for($i=0;$i<count($data);$i++){
                    $this->_tmp.='<li><img src="'.PHOTO_PATH.'slider/'.$data[$i].' "/></li>';
                }
            return $this->_tmp;
    }
    private function _getproductlist(){
    $load=array();
                $res=$this->storedProcedure("sp_product('by_rank','')");
        while($data=$res->fetch_object()){
            $productalone=PAGE_PATH.'search/productalone?id='.$data->id;
        $load[]='<div><!-- Carousel Item -->
                            <div class="product">
											
                        <div class="product-image">
                               <img src="'.PATH.'photo/photo/getindexImagefromsearch?id='.$data->id.'" alt="Product1"> 
                                <a href="'.$productalone.'">
                                        
                                </a>
                        </div>

                        <div class="product-info">
                                <h5><a href="'.$productalone.'">Shop name</a></h5>
                               <span class="price">Product name</span>                                
                        </div>

                        
                </div>
                <!-- /Carousel Item -->
        </div>';
    }
      
    return $this->_productfucntion(array_chunk($load,'3'));;     
    }
    private function _productfucntion($data){
        foreach($data as $val){
                    $this->_tmp.='<div class="owl-carousel" data-max-items="3">'.$val[0].$val[1].$val[2].'</div>';
        }
        return $this->_tmp;
    }
}
?>