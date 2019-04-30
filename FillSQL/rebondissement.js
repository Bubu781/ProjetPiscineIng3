window.onload = bouge


var posTop=20;
var posLeft=20;

var deplTop = 1;
var deplLeft = 1;

var larg = (window.innerWidth);
var haut = (window.innerHeight);

boug = true;

function bouge(){
	texte=document.getElementById("textrebond");
	larg = (window.innerWidth);
	haut = (window.innerHeight);

	texte.style.top=posTop+"px";
	texte.style.left=posLeft+"px";
		
	posTop= posTop + deplTop;
	posLeft= posLeft + deplLeft;

	if (posTop < 0 || posTop > haut-10){deplTop = -deplTop;}
	if (posLeft < 0 || posLeft > larg-230){deplLeft = -deplLeft;}
 
	
	if (boug) window.setTimeout("bouge()", "10");
}

