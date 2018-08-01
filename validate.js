function checkEmail(e)
{
	var element = e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value))
	{
	  alert("Email is invalid!!Only characters a-z A-Z 0-9 @ . _ are allowed");
	  element.value="";
	  return false;
	}
}
if(/[a-zA-Z]/.test(element.value))
	{
	  alert("Email is invalid!! a-z A-Z characters are must");
	  element.value="";
	  return false;
	}

if(/[@]/.test(element.value))
	{
	  alert("Email is invalid!You are missing @");
	  element.value="";
	  return false;
	}

if(/[.]/.test(element.value))
	{
	  alert("Email is invalid!!. is missing");
	  element.value="";
	  return false;
	}

	return true;
}

function checkSybject(e)
{
	var element=e.target;
	if(/[^a-zA-Z]/.test(element.value))
	{
	  alert("Invalid Subject.Use only a-z or A-z");
	  element.value="";
	  return false;
	}
	return true;

}

function submitForm(e) 
{
	if(document.getElementById('user-email').value!=""&&document.getElementById('subject').value!=""&&document.getElementById('messege').value!="")
	{
		var contact=document.getElementByClassName('Contact-Form');
		contact[0].innerHTML="<h3>Thank you for feedback</h3>";
	}
	// body...
}

var email= document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject= document.getElementById('subject');
subject.addEventListener('blur',checksubject,false);

var submit= document.getElementById('submit-btn');
submit.addEventListener('blur',submitForm,false);
