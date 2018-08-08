$(function(){

     $('#rollno').on('blur',function(){
     	if(!/(\d{2}((co)|(DCO)|(EE)|(DEX)|(ME)|(DCES)|(DE)|(CE))\d{2,3})/i.test(this.value)){

     		alert("Invalid Rollno");
     		this.value="";
     		$(this).focus();
     	}
     });

     $('#sname').on('keypress',function(e){

     		if(/[^a-zA-Z ]/.test(e.key)){
     			alert("Invalid Name.ONly alphabets and space is allowed")
     			this.value="";
     			$(this).focus();
     			return false;
     		}

     });

     $('#address').on('blur',function(e){
     	if(this.value.length>5){
     		alert("length is greater than 150 or less than 50")
     		this.value="";
     		$(this).focus();
     	}

     });
 
 $('#email').on('',function(){
         if(/((\w*\d*\w*)@(\w*\d*))/)


 });

});
