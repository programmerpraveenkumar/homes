//checking from serverd
function validation(formName,formele){   
    var error='';
    var functions={
        regExecute:function(val,exp){
            pattern= new RegExp(exp);
          if(pattern.test(val)){
             
              return true;
          }          
          return false;
        },
        empty:function(val){
            if(!this.regExecute(val,'([^$])')){               
                error='Field should not empty';
                return false;
            }
            return true;
        },
        
        email:function(val){            
            if(!this.regExecute(val,'^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$')){               
                error='Email is not valid';
                return false;
            }
            return true;              
        },
        alpha:function(val){
            if(!this.regExecute(val,'^([a-zA-Z])+$')){               
                error='only alphacharacters allowed';
                return false;
            }
            return true;  
        },
        max25:function(val){
            if(!this.regExecute(val,'^([a-zA-Z])+$')){               
                error='Maximum characters will be 25';
                return false;
            }
            return true;  
        },
        max15:function(val){
            if(!this.regExecute(val,'^([a-zA-Z])+$')){               
                error='Maximum characters will be 15';
                return false;
            }
            return true;  
        },
        number:function(val){
            if(!this.regExecute(val,'^([0-9])+$')){               
                error='only numbers valid';
                return false;
            }
            return true;  
        },
        mobile:function(val){
            if(!this.regExecute(val,'^([1-9]){10}')){               
                error='Moile no should be minimum 10 characters';
                return false;
            }
            return true;  
        },
        password:function(val){
            if(!this.regExecute(val,'^([1-9]){10}')){               
                error='not valid';
                return false;
            }
            return true;  
        },
        file:function(val){
            val=val.toLowerCase();            
            if(!this.regExecute(val,'([^\s]+(\.(jpeg|jpg|png|gif|bmp))$)')){
                error="only .jpg,png,gif,bmp files!!";
                return false;
            }
                return true;
        }
    };
    try{
        form=document.forms[formName];            
        for(ele in formele){            
            org_ele=document.forms[formName][formele[ele]['0']];
            val=org_ele.value;            
             error_ele=document.getElementById('error_'+formele[ele]['0']);
            if(!functions[formele[ele]['1']](val)){               
                error_ele.innerHTML='*'+error;
                error_ele.style.display='inline';                                
                org_ele.focus();
                alert(error);
                return false;
            }            
            else{
                error_ele.style.display='none';                                
            }
        }
       return true;
    }
    catch(e){
        alert("from catch error "+e.message);
        return false;
    }
    return false;
}
function passcheck(formObj,name){
    try{   
      field={"register":['pass','re-pass']};
        
        if(formObj[field[name]['0']].value==formObj[field[name]['1']].value){
        return true;
        }
        else{
            alert('password is not same');
            formObj[field[name]['0']].focus();
            return false;
        }    
    }
    catch(e){
        alert("from catch error "+e.message);
        return false;
    }

    return false;
}
function ajax_call(funName,type,data){
    URL='';    
    var funobj={
        subcategory:function(){          
          
           //document.getElementById(data['loader']).style.display="inline-block";
            URL=USER_PATH+'index/subcategory?id='+data["value"];
           this.ajax();           
        },     
//        mobile:function(){     
//            URL=USER_PATH+'index/unlockmobiledetails?id='+data["value"];
//           this.ajax();           
//        }, 
        status:function(){     
           URL=ADMINPATH+'product/status?id='+data["id"]+'&val='+data['value'];                    
            this.ajax();           
        }, 
        ajax:function(){
            var xmlhttp;
            //alert(URL);
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                if(type=='inner')
                    document.getElementById(data["id"]).innerHTML=xmlhttp.responseText;
                else if(type=='alert')
                    alert(xmlhttp.responseText);
                 else if(type=='reload'){
                  window.location.reload();
                 }                    
                else{
                    alert('no type found');
                }
                if(data['loader']!=null){
                    document.getElementById(data['loader']).style.display="none";
                }
                
                
            }
         if(xmlhttp.readyState==4 && xmlhttp.status==404){
            alert('ERROR: file not found'+URL);
          }
        }
        xmlhttp.open("GET",URL,true);
        xmlhttp.send();
                }
    };
    funobj[funName]();    
}
function load(wch){
    data={"reg_ok":"registered successfully","no":'UserName or Password is wrong',
    "add_ok":"Added Successfully","sub_exist":"ERROR::Delete the subcategory for this selected category(You can't delete)",
    "delete":"Successfully Deleted","del_ok":"Successfully Deleted",
    "update":"updated successfully"
    
    };
    try{
        if(data[wch]===undefined)        
            return '';
            return data[wch];
    }
    catch(e){
        
    }
//    if(data[wch]=='undefined')        
//    return '';
//    return data[wch];
}
var admin_functions={    
    delete:function(path){
        if(confirm('Are You confirm to delete')){
            window.location.assign(ADMINPATH+path);
        }
    }
    
    
};