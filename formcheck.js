function init()
		{
			document.myForm.firstName.focus();
		}
		
	
		function checkForm(thisForm)
		{
			if(thisForm.Email.value != "")
			{
				if(!isEmail(thisForm.Email,"Please enter a valid email address.")){return false;}
			}
			if(empty(thisForm.Interested_In,"Please indicated what you are interested in.")){return false;}
			return true;
		}
		
		function isFred(fObj,msg)
		{
			var rePattern = /^(?=.*\d)(?=.*[a-z])([a-z0-9]{8,18})$/;
			if(rePattern.test(fObj.value))
			{
				return true;
			}else{
				alert(msg);
				fObj.value = "";
				fObj.focus();
				return false;
			}
		}
		
		addOnload(init)