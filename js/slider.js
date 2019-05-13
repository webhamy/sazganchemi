var i1;
var slideNumber=1;
window.document.addEventListener("load", play());
window.document.getElementById('control').addEventListener("mouseout", resume);


function $(id){
    return document.getElementById(id);
}



function play(){
    i1=setInterval(forward, 3000);
}

function forward(){
    slideNumber++;
    if(slideNumber>=6) slideNumber=1;
    slideId="slide"+slideNumber;
    zIndexReset();
    opacityReset();

    //document.getElementById(slideId).style.opacity=1;
    $(slideId).style.opacity=1;


    document.getElementById(slideId).style.zIndex=1;
}

function next(){
    clearInterval(i1);
    forward();
    play();
}

function backward(){
    clearInterval(i1);
    slideNumber--;
    if(slideNumber<=0) slideNumber=5;
    slideId="slide"+slideNumber;
    zIndexReset();
    opacityReset();
    document.getElementById(slideId).style.opacity=1;
    document.getElementById(slideId).style.zIndex=1;
    play();
}

function opacityReset(){
    for(n=1;n<=5;n++){
        var slideName="slide"+n;
        document.getElementById(slideName).style.opacity=0;
    }
}

function zIndexReset(){

    for(n=1;n<=5;n++){
        var slideName="slide"+n;
        document.getElementById(slideName).style.zIndex=0;
    }
}



function gotoSlide(id){
    clearInterval(i1);
    //alert(id);
    var n=id.substring(5, 6);
    //alert(n);
    slideNumber=n-1;
    forward();
    play();
}
