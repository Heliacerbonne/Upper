window.addEventListener("load",initialisation,false);
//Déclaration des variables
var p1, g1, p2, g2, p3, g3, p4, g4, p5, g5, p6, g6, fermer, flou;




function initialisation(){
//Récuparation des id des petites et grandes images + évenements click
	p1=document.getElementById("p1");
	g1=document.getElementById("g1");
	p2=document.getElementById("p2");
	g2=document.getElementById("g2");
	p3=document.getElementById("p3");
	g3=document.getElementById("g3");
	p4=document.getElementById("p4");
	g4=document.getElementById("g4");
	p5=document.getElementById("p5");
	g5=document.getElementById("g5");
	p6=document.getElementById("p6");
	g6=document.getElementById("g6");
	p7=document.getElementById("p7");
	g7=document.getElementById("g7");
	fermer=document.getElementById("fermer");
	flou=document.getElementById("flou");
	fond=document.getElementById("fond");
	corps=document.getElementById("corps");
	p1.addEventListener("click",afficher1,false);
	p2.addEventListener("click",afficher2,false);
	p3.addEventListener("click",afficher3,false);
	p4.addEventListener("click",afficher4,false);
	p5.addEventListener("click",afficher5,false);
	p6.addEventListener("click",afficher6,false);
	p7.addEventListener("click",afficher7,false);

	//Fonction qui affiche la 1ère grande image + flou + croix, elle est répétée 6 fois
	function afficher1 (evt){
		g1.style.visibility="visible";
		fermer.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.addEventListener("click",cacher1,false);
	}
	//Fonction qui permet de cacher la grande image + le flou
	function cacher1 (evt){
		g1.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher2 (evt){
		g2.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher2,false);
	}

	function cacher2 (evt){
		g2.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher3 (evt){
		g3.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher3,false);
	}

	function cacher3 (evt){
		g3.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher4 (evt){
		g4.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher4,false);
	}

	function cacher4 (evt){
		g4.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher5 (evt){
		g5.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher5,false);
	}

	function cacher5 (evt){
		g5.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher6 (evt){
		g6.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher6,false);
	}

	function cacher6 (evt){
		g6.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}

	function afficher7 (evt){
		g7.style.visibility="visible";
		flou.style.visibility="visible";
		fermer.style.visibility="visible";
		fermer.addEventListener("click",cacher7,false);
	}

	function cacher7 (evt){
		g7.style.visibility="hidden";
		flou.style.visibility="hidden";
		fermer.style.visibility="hidden";
	}


	// Déclaration variables
	var delta, currPos, logo, flc1, flc2, desc=0;
	const HAUT=53, CORDY=53, DEPART=100;

	if(window.addEventListener){
		document.addEventListener('DOMMouseScroll',moveObject,false);
		document.addEventListener('keydown',moveObject,false);
		document.onmousewheel=moveObject;
		logo=document.getElementById("scroll");
	}
	// Fonction qui permet de déplacer l'objet avec le scroll et les flèches, PB: Vitesse + Limite
	function moveObject(event)
	{
	flc1=event.keyCode;

	desc=0;
	if(event.wheelDelta){
	desc=0;
	delta=event.wheelDelta/120;
	}
	//firefox
	else if(event.detail){
	delta=-event.detail/4;
	}
	//Flèche du bas
	 if(flc1==40 ){
	delta=0;
	desc=-60;
	}
	//Flèche du haut
	 if(flc1==38 && logo.offsetTop >=DEPART){
	delta=0;
	desc+=60;
	}

	// Coordonné y du logo
	currPos=document.getElementById('scroll').offsetTop;
	currPos=parseInt(parseInt(currPos)-(delta*150)-(desc));
	//currPos=parseInt(parseInt(currPos)-(delta*5));

	// responsable de l'animation du scroll
	if ( currPos >= HAUT && currPos <= (fond.offsetHeight - logo.offsetHeight)){
	 document.getElementById('scroll').style.top=currPos+"px";
	 }// permet à la mongolfière de remonter
	 else if (currPos >= HAUT){
	 document.getElementById('scroll').style.top=currPos-8+"px";
	}
	// permet à la mongolfière de redescendre
	else if (currPos < HAUT) {
	//document.getElementById('scroll').style.top=CORDY-(delta*0.5)+"px";
	document.getElementById('scroll').style.top=CORDY-(delta*0.5+desc*2)+"px";
	}

	}

}