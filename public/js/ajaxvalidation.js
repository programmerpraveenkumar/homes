           function ajaxvalidation(formdetails,ele){
               var error;
                var parentForm;
                var func={
                    regExecute:function(val,exp){
                            pattern= new RegExp(exp);
                          if(pattern.test(val)){

                              return true;
                          }          
                          return false;
                    },
                    empty:function(val){
                           if(val==null ||val=='' ){
                               error='Field should not be empty';
                                return false;
                           }
                           else{
                               return true;
                           }
                    },//emtty method
                    number:function(val){
                        if(!this.regExecute(val,'^([0-9])+$')){               
                            error='only numbers valid';
                            return false;
                        }
                        return true;  
                    },
                    createquerystring:function(data){
                        query='?test=null&';                       
                        for(i=0;i<data.length;i++){
                            query+=data[i]+'='+parentForm[data[i]].value+'&';
                        }
                        this.ajax(query);
                    },
                    file:function(val){
                            val=val.toLowerCase();                                        
                            if(!this.regExecute(val,'([^\\s]+(\.(jpeg|jpg|png|gif|bmp))$)')){
                                error="only .jpg,png,gif,bmp files!!";
                   
                                return false;
                            }
                                return true;
                    },
                    ajax:function(val){                  
                            var xmlhttp;
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
                                    try{
                                        server_response=JSON.parse(xmlhttp.responseText);
                                        if(server_response['status']=='exist'){
                                                    loader.show(server_response['error']);
                                        }
                                        else{
                                            //loader.show(server_response['error']);
                                            //alert('form is wating for submit');
                                            loader.formdubmit();
                                             
                                        }
                                    }
                                    catch(e){
                                        alert(xmlhttp.responseText+' '+e.message);
                                    }
                                
                                        
                                    }
                             if(xmlhttp.readyState==4 && xmlhttp.status==404){
                                alert('ERROR: file not found');
                              }
                            }
                            
                            
                            xmlhttp.open("GET",'get.php'+val,true);
                            xmlhttp.send();
                           
                         }//ajax function ends
                };   //function(func) class ends
                var loader={
                    show:function(data){
                       // document.getElementById('formloader').innerHTML=data;
                    },formsubmit:function(){
                        parentForm.submit();
                    }
                };
                try{
                    loader.show('loading......');
                    form=document.forms[formdetails['name']];                   
                    parentForm=form;					
                    for(elements  in ele){               
                        if(ele[elements]['1']=='ajax'){      
                            if(formdetails['type']!='ajax'){
                               loader.formsubmit();
                                return false;
                            }
                            func.createquerystring(ele[elements]['0']);
                              //func.ajax(ele[elements]['0']);
                        }                           
                        else{
                             main_ele=form[ele[elements]['0']]
                            val=main_ele.value;    
                            if(!func[ele[elements]['1']](val)){
                                   document.getElementById("error_"+ele[elements]['0']).innerHTML=error;
                                main_ele.focus();                
                                loader.show('plese fill this.. '+ele[elements]['1']);
                                return false;
                           }
                           else{
                               document.getElementById("error_"+ele[elements]['0']).innerHTML="";
                           }
                        }   
                  }                
              }
              catch(e){
                alert(e.message);
              }
            }


