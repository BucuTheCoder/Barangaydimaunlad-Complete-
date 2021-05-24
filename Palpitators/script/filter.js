//Created by Gerard Bernal

function myfilter(){
	var x = document.getElementById("mySelect").value;

	//children attributes
	var ac = document.getElementById("all-children");
	var cp1 = document.getElementById("childrenP1");
	var cp2 = document.getElementById("childrenP2");
	var cp3 = document.getElementById("childrenP3");

	//teenagers
	var at = document.getElementById("all-teenagers");
	var tp1 = document.getElementById("teenagersP1");
	var tp2 = document.getElementById("teenagersP2");
	var tp3 = document.getElementById("teenagersP3");

	//adults
	var aa = document.getElementById("all-adults");
	var ap1 = document.getElementById("adultsP1");
	var ap2 = document.getElementById("adultsP2");
	var ap3 = document.getElementById("adultsP3");

	//seniors
	var as = document.getElementById("all-seniors");
	var sp1 = document.getElementById("seniorsP1");
	var sp2 = document.getElementById("seniorsP2");
	var sp3 = document.getElementById("seniorsP3");

	//residents
	var ar = document.getElementById("all-residents");
	var rp1 = document.getElementById("residentsP1");
	var rp2 = document.getElementById("residentsP2");
	var rp3 = document.getElementById("residentsP3");

	//boarders
	var ab = document.getElementById("all-boarders");
	var bp1 = document.getElementById("boardersP1");
	var bp2 = document.getElementById("boardersP2");
	var bp3 = document.getElementById("boardersP3");

	//male
	var am = document.getElementById("all-male");
	var mp1 = document.getElementById("maleP1");
	var mp2 = document.getElementById("maleP2");
	var mp3 = document.getElementById("maleP3");

	//female
	var af = document.getElementById("all-female");
	var fp1 = document.getElementById("femaleP1");
	var fp2 = document.getElementById("femaleP2");
	var fp3 = document.getElementById("femaleP3");


	//selected is All

	 if(x =='All'){
	 	//call reset function
	 	reset();

	 	//set display to block to display the values
	 	ac.style.display="block";
	 	at.style.display="block";
	 	aa.style.display="block";
	 	as.style.display="block";
	 	ar.style.display="block"; 
	 	ab.style.display="block"; 
	 	am.style.display="block"; 
	 	af.style.display="block";
	 	
	 }

	 //show only purok 1
	 else if(x == 'Purok 1'){
	 	ac.style.display="none";
	 	cp1.style.display="block";
	 	cp2.style.display="none";
	 	cp3.style.display="none";

	 	at.style.display="none";
	 	tp1.style.display="block";
	 	tp2.style.display="none";
	 	tp3.style.display="none";

	 	aa.style.display="none";
	 	ap1.style.display="block";
	 	ap2.style.display="none";
	 	ap3.style.display="none";

	 	as.style.display="none";
	 	sp1.style.display="block";
	 	sp2.style.display="none";
	 	sp3.style.display="none";

	 	ar.style.display="none";
	 	rp1.style.display="block";
	 	rp2.style.display="none";
	 	rp3.style.display="none";

	 	ab.style.display="none";
	 	bp1.style.display="block";
	 	bp2.style.display="none";
	 	bp3.style.display="none";

	 	am.style.display="none";
	 	mp1.style.display="block";
	 	mp2.style.display="none";
	 	mp3.style.display="none";

	 	af.style.display="none";
	 	fp1.style.display="block";
	 	fp2.style.display="none";
	 	fp3.style.display="none";
	 }

	 //show only purok 2
	 else if(x == 'Purok 2'){
	 	ac.style.display="none";
	 	cp1.style.display="none";
	 	cp2.style.display="block";
	 	cp3.style.display="none";

	 	at.style.display="none";
	 	tp1.style.display="none";
	 	tp2.style.display="block";
	 	tp3.style.display="none";

	 	aa.style.display="none";
	 	ap1.style.display="none";
	 	ap2.style.display="block";
	 	ap3.style.display="none";

	 	as.style.display="none";
	 	sp1.style.display="none";
	 	sp2.style.display="block";
	 	sp3.style.display="none";

	 	ar.style.display="none";
	 	rp1.style.display="none";
	 	rp2.style.display="block";
	 	rp3.style.display="none";

	 	ab.style.display="none";
	 	bp1.style.display="none";
	 	bp2.style.display="block";
	 	bp3.style.display="none";

	 	am.style.display="none";
	 	mp1.style.display="none";
	 	mp2.style.display="block";
	 	mp3.style.display="none";

	 	af.style.display="none";
	 	fp1.style.display="none";
	 	fp2.style.display="block";
	 	fp3.style.display="none";
	 }

	 //show only purok 3
	 else if(x == 'Purok 3'){
	 	ac.style.display="none";
	 	cp1.style.display="none";
	 	cp2.style.display="none";
	 	cp3.style.display="block";

	 	at.style.display="none";
	 	tp1.style.display="none";
	 	tp2.style.display="none";
	 	tp3.style.display="block";

	 	aa.style.display="none";
	 	ap1.style.display="none";
	 	ap2.style.display="none";
	 	ap3.style.display="block";

	 	as.style.display="none";
	 	sp1.style.display="none";
	 	sp2.style.display="none";
	 	sp3.style.display="block";

	 	ar.style.display="none";
	 	rp1.style.display="none";
	 	rp2.style.display="none";
	 	rp3.style.display="block";

	 	ab.style.display="none";
	 	bp1.style.display="none";
	 	bp2.style.display="none";
	 	bp3.style.display="block";

	 	am.style.display="none";
	 	mp1.style.display="none";
	 	mp2.style.display="none";
	 	mp3.style.display="block";

	 	af.style.display="none";
	 	fp1.style.display="none";
	 	fp2.style.display="none";
	 	fp3.style.display="block";
	 }


//reset all display to none
	 function reset(){
	 	cp1.style.display="none";
	 	tp1.style.display="none";
	 	ap1.style.display="none";
	 	sp1.style.display="none";
	 	rp1.style.display="none";
	 	bp1.style.display="none";
	 	mp1.style.display="none";
	 	fp1.style.display="none";


	 	cp2.style.display="none";
	 	tp2.style.display="none";
	 	ap2.style.display="none";
	 	sp2.style.display="none";
	 	rp2.style.display="none";
	 	bp2.style.display="none";
	 	mp2.style.display="none";
	 	fp2.style.display="none";

	 	cp3.style.display="none";
	 	tp3.style.display="none";
	 	ap3.style.display="none";
	 	sp3.style.display="none";
	 	rp3.style.display="none";
	 	bp3.style.display="none";
	 	mp3.style.display="none";
	 	fp3.style.display="none";

	 }

}