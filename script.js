

// Get modal element
// var modal = document.getElementById('simpleModal');

// Get close button
// var closeBtn = document.getElementsByClassName('closeBtn')[0];


// Listen for close click
// closeBtn.addEventListener('click', closeModal);
// Listen for outside click
// window.addEventListener('click', outsideClick);

// Function pour ouvrir modal
/*function openModal(){
    modal.style.display = 'block';
}*/

// Function pour fermer modal
/*function closeModal(){
    modal.style.display = 'none';
}*/

// Function pour fermer modal en dehors de la box
/*function outsideClick(e){
    if(e.target == modal){
       modal.style.display = 'none';
    }
}*/

/* var twitterShare = document.querySelector('[data-js="twitter-share"]');
twitterShare.onclick = function (e) {
    e.preventDefault();
    var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
    if (twitterWindow.focus) {
        twitterWindow.focus();
    }
    return false;
};

var facebookShare = document.querySelector('[data-js="facebook-share"]');
facebookShare.onclick = function (e) {
    e.preventDefault();
    var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
    if (facebookWindow.focus) {
        facebookWindow.focus();
    }
    return false;
}; */


//********************************************au click affiche le cv

//**************************Amandine L*******************************
var Amandine=document.getElementById("photoAmand");
var affich1=document.getElementById("presentationAmandine");
function openTab(){
    Amandine.addEventListener("click", function () {
        if(affich1.style.visibility==='hidden'){
            affich1.style.visibility='visible';
        }
        else if (affich1.style.visibility==='visible'){
            affich1.style.visibility='hidden';
        }
    });
}
openTab();


//*******************************************************andre*********************
var AndreSp=document.getElementById("photoAndreSp");
var affich2=document.getElementById("presentationAndreSp");
function openTab2(){
    AndreSp.addEventListener("click", function () {
        if(affich2.style.visibility==='hidden'){
            affich2.style.visibility='visible';
        }
        else if (affich2.style.visibility==='visible'){
            affich2.style.visibility='hidden';
        }
    });
}
openTab2();
//*******************************ARNAUD DUT***********************************************
var ArnaudD=document.getElementById("photoArnaud");
var affich4=document.getElementById("presentationArnaudD");
function openTab4(){
    ArnaudD.addEventListener("click", function () {
        if(affich4.style.visibility==='hidden'){
            affich4.style.visibility='visible';
        }
        else if (affich4.style.visibility==='visible'){
            affich4.style.visibility='hidden';
        }
    });
}
openTab4();
//*********************************************BENOIT CARPEN*********************
var BenoitC=document.getElementById("photoBenoît");
var affich5=document.getElementById("presentationBenoit");
function openTab5(){
    BenoitC.addEventListener("click", function () {
        if(affich5.style.visibility==='hidden'){
            affich5.style.visibility='visible';
        }
        else if (affich5.style.visibility==='visible'){
            affich5.style.visibility='hidden'
        }
    });
}
openTab5();

//*****************************************brian  FLA******************
var BrianF=document.getElementById('photoBrian');
var affich21=document.getElementById("presentationBrian");
function openTab21(){
    BrianF.addEventListener("click", function () {
        if(affich21.style.visibility==='hidden'){
            affich21.style.visibility='visible';
        }
        else if (affich21.style.visibility==='visible'){
            affich21.style.visibility='hidden';
        }
    });
}
openTab21();


//******************************************briant Bultot*************
var BryantB=document.getElementById('photoBryanB');
var affich6=document.getElementById("presentationBryanB");
function openTab6(){
    BryantB.addEventListener("click", function () {
        if(affich6.style.visibility==='hidden'){
            affich6.style.visibility='visible';
        }
        else if (affich6.style.visibility==='visible'){
            affich6.style.visibility='hidden';
        }
    });
}
openTab6();
function openTab6bis(){
    affich6.addEventListener("click", function () {
        if(affich6.style.visibility==='visible'){
            affich6.style.visibility='hidden';
        }
    });
}
openTab6bis();
//************************************CYRIAK*****************
var CyriakL=document.getElementById('photoCyriakL');
var affich7=document.getElementById("presentationCyriakL");
function openTab7(){
    CyriakL.addEventListener("click", function () {
        if(affich7.style.visibility==='hidden'){
            affich7.style.visibility='visible';
        }
        else if (affich7.style.visibility==='visible'){
            affich7.style.visibility='hidden';
        }
    });
}
openTab7();
//***********************************CYRILL VIN******************************
var CyrilleV=document.getElementById('photoCyrilleV');
var affich8=document.getElementById("presentationCyrilleV");
function openTab8(){
    CyrilleV.addEventListener("click", function () {
        if(affich8.style.visibility==='hidden'){
            affich8 .style.visibility='visible';
        }
        else if (affich8.style.visibility==='visible')
        {
            affich8.style.visibility='hidden';
        }
    });
}
openTab8();
//*********************************************DAVID PRONNIER******************************
var DavidP=document.getElementById('photoDavidP');
var affich9=document.getElementById("presentationDavidP");
function openTab9(){
    DavidP.addEventListener("click", function () {
        if(affich9.style.visibility==='hidden'){
            affich9 .style.visibility='visible';
        }
        else if (affich9.style.visibility==='visible'){
            affich9.style.visibility='hidden';
        }
    });
}
openTab9();

//**********************************************FLORENCE SOUDAIN***************
var FlorenceS=document.getElementById('photoFlorenceS');
var affich10=document.getElementById("presentationFlorenceS");
function openTab10(){
    FlorenceS.addEventListener("click", function () {
        if(affich10.style.visibility==='hidden'){
            affich10 .style.visibility='visible';
        }
        else if (affich10 .style.visibility==='visible')
        {
            affich10.style.visibility='hidden';
        }
    });
}
openTab10();
//*********************************GEOFFROY dohen*******************
var GeffroyD=document.getElementById('photoGeoffrey');
var affich11=document.getElementById("presentationGeoffreyD");
function openTab11(){
    GeffroyD.addEventListener("click", function () {
        if(affich11.style.visibility==='hidden'){
            affich11.style.visibility='visible';
        }
        else if (affich11.style.visibility==='visible')
        {
            affich11.style.visibility='hidden'
        }
    });
}
openTab11();
//***************************************************GREGORY
var GregoryC=document.getElementById('photoGregoryC');
var affich12=document.getElementById("presentationGregoryC");
function openTab12(){
    GregoryC.addEventListener("click", function () {
        if(affich12.style.visibility==='hidden'){
            affich12.style.visibility='visible';
        }
        else  if(affich12.style.visibility==='visible'){
            affich12.style.visibility='hidden';
        }
    });
}
openTab12();
//*****************************************JAMES
var JamesD=document.getElementById('photoJamesD');
var affich13=document.getElementById("presentationJamesD");
function openTab13(){
    JamesD .addEventListener("click", function () {
        if(affich13.style.visibility==='hidden'){
            affich13.style.visibility='visible';
        }  else if(affich13.style.visibility==='visible'){
            affich13.style.visibility='hidden';
        }
    });
}
openTab13();
//*************************LUBIN ME**************
var LubinM=document.getElementById('photoLubinM');
var affich14=document.getElementById("presentationLubinM");
function openTab14(){
    LubinM.addEventListener("click", function () {
        if(affich14.style.visibility==='hidden'){
            affich14.style.visibility='visible';
        } else if(affich14.style.visibility==='visible'){
            affich14.style.visibility='hidden';
        }
    });
}
openTab14();
//**********************************MAXIME

var MaximeD=document.getElementById('photoMaximeD');
var affich15=document.getElementById("presentationMaximeD");
function openTab15(){
    MaximeD.addEventListener("click", function () {
        if(affich15.style.visibility==='hidden'){
            affich15.style.visibility='visible';
        }
        else if(affich15.style.visibility==='visible'){
            affich15.style.visibility='hidden';
        }
    });
}
openTab15();
//******************************************************************ROMAIN
var RomainB=document.getElementById('photoRomainB');
var affich16=document.getElementById("presentationRomainB");
function openTab16(){
    RomainB.addEventListener("click", function () {
        if(affich16.style.visibility==='hidden'){
            affich16.style.visibility='visible';
        }else if(affich16.style.visibility==='visible'){
            affich16.style.visibility='hidden';
        }
    });
}


//**********************************sebastien
openTab16();
//**********************************ROMAIN CARP
var RomainC=document.getElementById('photoRomC');
var affichx=document.getElementById('presentationRomC');
function openTabx() {
    RomainC.addEventListener("click",function () {
        if (affichx.style.visibility==='hidden'){
            affichx.style.visibility='visible'
        }
        else if (affichx.style.visibility==='visible'){
            affichx.style.visibility='hidden'
        }

    })


}
openTabx();
//*****************************************SEBASTIENb
var SebastienB=document.getElementById('photoSebastienB');
var affich18=document.getElementById("presentationSebastB");
function openTab18(){
    SebastienB.addEventListener("click", function () {
        if(affich18.style.visibility==='hidden'){
            affich18.style.visibility='visible';
        }
        else if (affich18.style.visibility==='visible'){
            affich18.style.visibility='hidden'
        }
    });
}
openTab18();
//***********************************************SOPHIE
var SophieC=document.getElementById('photoSophieC');
var affich19=document.getElementById("presentationSophieC");
function openTab19(){
    SophieC.addEventListener("click", function () {
        if(affich19.style.visibility==='hidden'){
            affich19.style.visibility='visible';
        }
       else if (affich19.style.visibility==='visible'){
           affich19.style.visibility='hidden';
       }
    });
}
openTab19();
//***************************STEVEN
var StenesD=document.getElementById('photoStevensD');
var affich20=document.getElementById("presentationStevensD");
function openTab20(){
    StenesD.addEventListener("click", function () {
        if(affich20.style.visibility==='hidden'){
            affich20.style.visibility='visible';
        }
        else if (affich20.style.visibility==='visible'){
            affich20.style.visibility='hidden';
        }
    });
}
openTab20();
//*****************************redirection pour cv
alert('go!!!!bonjour  ooooooooh!');
