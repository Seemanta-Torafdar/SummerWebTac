
function handlesubmit()
{

var name = document.getElementById("name").value;
var age = document.getElementById("age").value;
var number = document.getElementById("number").value;
var mail = document.getElementById("mail").value;
var insurance = document.getElementById("insurance").value;
var policy = document.getElementById("policy").value;
var Username = document.getElementById("username").value;
var  Password = document.getElementById("Cpass").value;
var  Confirm_Password = document.getElementById("Cpass").value;



var department = document.getElementById("Department").value;
 

 
if (name === "" || age ==="" || id === "" || department ==="")
   { alert ("Please Fill the Form");
return false;
   }
 
if (!/^\d{5}$/.test(id))
   { alert ("Id must be 5 digit");
    return false;
   }
 
 
 
 
alert("Registration Complete \n " +

"Name:" +name + "\n" +
"Phone Number: " + number + "\n" +
"Email Address:" +mail+ "\n" +
"Insurance Prodider " + insurance + "\n" +    
" Insurance Policy Number:" +policy+ "\n" +
" Username:" +Username+ "\n"+
"  Password:" + Password+ "\n" +

" Confirm Password:" + Confirm_Password+ "\n" );

 
 
 
}

 
