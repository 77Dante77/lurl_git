// Lurl134.js
// bibliotheque Canvas pour la série Lurl
//


var LargeurCanvas=5000;
var HauteurCanvas=5000;
var Rayon=LargeurCanvas/100;
var ctx;
var vig = new Array();
var c;
var varJson;
var c2;
var ctx2;

// Bords du canvas donnés en dur en attendant mieux !
var CanvasX=520;
var CanvasY=100;

// Tableau déclaré pour échange avec PHP ?
var listeURLXY = new Array();

function Efface(){
    ctx.clearRect(0,0,HauteurCanvas,LargeurCanvas);
}

function Hasard(z){
    return Math.floor((Math.random() * z) + 1);
}
function Hz1(t,z,k){
    return t+z*k*(1-Math.random()*2);
}

function Couleur(){
     var ClRed=Hasard(255);
     var ClGreen=Hasard(255);
     var ClBlue=Hasard(255);
     var Transparence=Math.random();
     var Palette="rgba(" + ClRed + "," + ClGreen + "," + ClBlue + "," +Transparence+ ")";
     return Palette;
}

// fonction de test
function Trace() {
	InitTrace();
    
    // Point de départ
    x=Hasard(LargeurCanvas);
    y=Hasard(HauteurCanvas);
   
    for (i=1; i<=4; i++) {
        x0=Hasard(LargeurCanvas);
        y0=Hasard(HauteurCanvas);
        x1=Hasard(LargeurCanvas);
        y1=Hasard(HauteurCanvas);
        x2=Hasard(LargeurCanvas);
        y2=Hasard(HauteurCanvas);
        ctx.strokeStyle=Couleur();
        ctx.beginPath(); 
        ctx.moveTo(x,y);    
        ctx.bezierCurveTo(x0,y0,x1,y1,x2,y2);
        ctx.stroke();
        ctx.fillStyle=Couleur();
        ctx.fill();
        x=x2;
        y=y2;

    }
}

//Trace une tige sous forme de courbe de Bezier avec une origine et une fin,
// les points de courbures étant pris au hasard dans le rayon d'action
// si x1 et y1 sont à zero, ils sont choisis au hasard
// e est l'épaisseur
function Tige(x0,y0,x1,y1,e,coulTige) {
   // points de courbure
    if ((x1==0) && (y1==0)) {
        x1=Hz1(x0,Rayon,2);
        y1=Hz1(y0,Rayon,2);
    }
    if (e==0) e=1;
    x2=Hz1(x0,Rayon,1);
    y2=Hz1(y0,Rayon,1);
    x3=Hz1(x0,Rayon,1);
    y3=Hz1(y0,Rayon,1);
    ctx.lineWidth = e;
    // Couleur au hasard ou gris
    if (coulTige != 0) {ctx.strokeStyle=Couleur();}
    else {ctx.strokeStyle="rgb(215,215,18)";}
	ctx.beginPath(); 
  	ctx.moveTo(x0,y0);    
	ctx.bezierCurveTo(x2,y2,x3,y3,x1,y1);
	ctx.stroke();
}

function Droite(x0,y0,x1,y1){
if ((x1==0) && (y1==0)) {
        x1=Hz1(x0,Rayon,1);
        y1=Hz1(y0,Rayon,1);
    }
    ctx.strokeStyle=Couleur();
    ctx.lineWidth = 1;
    ctx.beginPath(); 
    ctx.moveTo(x0,y0);    
    ctx.lineTo(x1,y1);
    ctx.stroke();
   // ctx.closePath();
}

function Cercle(x,y,r,coul){
	ctx.beginPath(); 
	ctx.arc(x,y,r,0,2*Math.PI); 
    ctx.strokeStyle=Couleur(); 
	ctx.stroke();  
    ctx.fillStyle=coul;
	ctx.fill();
}

function InitTrace() {
  
    vig[0] = document.getElementById("vignette0").getContext("2d");
    vig[1] = document.getElementById("vignette1").getContext("2d");
    vig[2] = document.getElementById("vignette2").getContext("2d");
    vig[3] = document.getElementById("vignette3").getContext("2d");
    vig[4] = document.getElementById("vignette4").getContext("2d");
    vig[5] = document.getElementById("vignette5").getContext("2d");
    vig[6] = document.getElementById("vignette6").getContext("2d");
    vig[7] = document.getElementById("vignette7").getContext("2d");
  
    c = document.getElementById("graphique");
    ctx = c.getContext("2d");
  
    //LargeurCanvas=c.offsetWidth + 'px';
    //HauteurCanvas=c.offsetHeight + 'px';
    
    Rayon=Math.floor(LargeurCanvas/100);
    //echelle=LargeurCanvas/500
    //ctx.scale(echelle,echelle); // échelle 1/8, par exemple 4000 virtuels pour 500 px

    ctx.scale(0.1,0.1); // au pifometre !
  
    ctx.beginPath();              
    ctx.lineWidth="1";

//Vignette agrandie
    c2 = document.getElementById("image");
    ctx2 = c2.getContext("2d");
    //facteur d'échelle entre les petites vignettes et la grande
    ctx2.scale(2.65, 2.65);
}

function AfficheImage(i,n) {
    var img = new Image();
    img.src = i;
    img.onload = function(){
        vig[n].drawImage(img, 0, 0,87,87);
    }
}

function CacheCanvas(etat) {
    c.setAttribute("hidden", etat);
}

// Donne les coordonnées de la souris dans le Canvas
function clic(event){
    event = event || window.event;
    xSouris = event.clientX + (document.body.scrollLeft || document.documentElement.scrollLeft);;
    ySouris = event.clientY + (document.body.scrollTop || document.documentElement.scrollTop);
    xCanvas = xSouris-CanvasX;
    yCanvas = ySouris-CanvasY;
    setTexte('xa',xCanvas);
    setTexte('ya',yCanvas);
    TesteURL(xCanvas,yCanvas);
    return xCanvas, yCanvas;
}

function TesteURL(xCanvas,yCanvas) {
    clef = Math.floor(xCanvas/20)*10000 + Math.floor(yCanvas/20);
    setTexte('cle',clef);
    // Garder les lignes ci dessous  pour essais sur le passage de variables PHP -> Javascript
  //  alert(var_dump(varJson,512)); // fonctionne bien 
  //  var jsObject = JSON.parse(varJson);
  //  alert(var_dump(jsObject,512));
    return;
}

function Zoom(sens){
    var imageData = ctx.getImageData(0, 0, 800,800);
    if (sens == "+") {ctx.scale(2,2);}
    if (sens == "-") {ctx.scale(.5,.5);}
    ctx = c.getContext("2d");
  
    ctx.putImageData(imageData, 0, 0);
    //ctx.drawImage(c,0,0);
}

function DeplX(sens){
//    var imageData = ctx.getImageData(0, 0, 800,800);
      //  ctx.save();
    if (sens == ">") {ctx.translate(100,0);}
    if (sens == "<") {ctx.translate(-100,0);}
    if (sens == "V") {ctx.translate(0,100);}
    if (sens == "^") {ctx.translate(0,-100);}
     //   ctx.restore();
}

function clicVignette(id1, id2){
    c1 = document.getElementById(id1);
    ctx1 = c1.getContext("2d");
    var imageData = ctx1.getImageData(0, 0, 87,87);
    ctx2.putImageData(imageData, 0, 0);
  //  ctx2.scale(2, 2);
 //   ctx2.putImageData(imageData, 0, 0);
    ctx2.drawImage(c2,0,0,174,174);
}

function EvalSound(soundobj) {
    var thissound= eval("document."+soundobj);
    thissound.Play();
}
  