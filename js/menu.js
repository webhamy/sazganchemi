window.onscroll=function () { sticky()};
function sticky() {
    if(document.body.scrollTop>30 || document.documentElement.scrollTop>30){
        document.getElementById('header').style.position="fixed";
        // document.getElementById('header').style.width="100%";
        document.getElementById('header').style.top="0";
        document.getElementById('header').style.right="50%";
        document.getElementById('header').style.marginRight="-600px";
        document.getElementById('header').style.height="60px";
        document.getElementById('header').style.zIndex="9999";


        document.getElementById('menu').style.height="60px";

        document.getElementById('logo').style.height="55px";
        document.getElementById('logo').style.width="50px";
        document.getElementById('logo').style.margin="2px 5px";


        document.getElementById('ul').style.lineHeight="40px";
        document.getElementById('ul').style.height="40px";
        document.getElementById('ul').style.margin="10px 40px";
        document.getElementById('ul').firstElementChild.style.height="40px";


        document.getElementById('images').style.height="40px";
        document.getElementById('search').style.marginTop="5px";

    }
    else {
        document.getElementById('header').style.position="static";
        document.getElementById('header').style.top="";
        document.getElementById('header').style.height="";
        document.getElementById('header').style.right="";
        document.getElementById('header').style.marginRight="";


        document.getElementById('logo').style.height="";
        document.getElementById('logo').style.width="";
        document.getElementById('logo').style.margin="";

        document.getElementById('menu').style.height="";

        document.getElementById('ul').style.lineHeight="";
        document.getElementById('ul').firstElementChild.style.height="";
        document.getElementById('ul').style.height="";
        document.getElementById('ul').style.margin="";


        document.getElementById('images').style.height="";
        document.getElementById('search').style.marginTop="";

    }
}
