

function chkPassword(){
var vUsername;
	if(vUsername != "" && document.getElementById("txtUsername").value!=null && document.getElementById("txtPassword").value!=null && document.getElementById("txtUsername").value.toLowerCase()==document.getElementById("txtUsername").value && document.getElementById("txtPassword").value.toLowerCase()=="ifuture"){
		vUsername=document.getElementById("txtUsername").value;

		//alert("before cookie set");
		localStorage.setItem("username", vUsername);
		//alert("cookie set");
		//swal("Great","Correct Credentials","success");

		window.location.href="landing.html";
		
	}
	else{
		swal("You Entered Wrong Credentials","Please enter username & password as ifuture only","error");
	}
}

function chkResetPassword(){

	if(document.getElementById("txtUsername").value=="ifuture" && document.getElementById("txtPassword").value=="ifuture" || document.getElementById("txtUsername").value=="IFUTURE" && document.getElementById("txtPassword").value=="IFUTURE" || document.getElementById("txtUsername").value=="Ifuture" && document.getElementById("txtPassword").value=="Ifuture"){
		swal("Great","Credentials Reset Successfully","success");
		//window.location.href="landing.html";
	}
	else{
		swal("You Entered Wrong Credentials","Please enter username & secret question answer as ifuture only","error");
	}
}


function remItem(){

	localStorage.removeItem("username");
	//localStorage.removeItem("fsubmit");
	window.location.href="login.html";
}

function checkCookie() {


//localStorage.setItem("fsubmit","datareceived");

  let username = localStorage.getItem("username");

  //if(fsubmit !="" && fsubmit!=null){
  //	continue;
 // }
   if (username != "" && username !=null) {
   document.getElementById("greet").innerHTML=""+username+" Welcome to Members Page";
  } else {
    
    window.location.href="login.html";
    }
  }

  function checkCookieLogin() {
  let username = localStorage.getItem("username");
  if (username != "" && username !=null) {
   window.location.href="landing.html";
  } else {
    
    //window.location.href="login.html";
    }
  }
