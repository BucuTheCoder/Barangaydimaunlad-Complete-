//coded by Bryan Joshua Bucu
// this code is for the admin panel add, edit, display and delete options.

function add_user(){
	var x = document.getElementById("adduser");
	var xx = document.getElementById("welcome");
	x.style.display = "block";
	xx.style.display= "none";
}


function view_users(){
	var x = document.getElementById("id01");
	var xx = document.getElementById("welcome");
	x.style.display = "block";
	xx.style.display= "none";
			
}

function delete_user(){
	var x = document.getElementById("deleteuser");
	var xx = document.getElementById("welcome");
		x.style.display = "block";
		xx.style.display= "none";
}

function close_tab(){
	var x =document.getElementById("id01");
	var y =document.getElementById("adduser");	
	var z =document.getElementById("deleteuser");
	var xx = document.getElementById("welcome");
	xx.style.display= "block";	
	x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
}