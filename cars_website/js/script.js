let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
let carousel =document.querySelector('.carousel');
let carousel_images=document.querySelector('.carousel .carousel-images')
let carousel_main=document.querySelector('.carousel-main-image');

let showmore1=document.querySelector('#showmore-1');



function carouselFunc(picture)
{
document.querySelector('.main-picture img').src=picture;
}


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} 
showmore1.onclick = () =>{
    let carousel1_pics=document.querySelector('.carousel1-pictures').innerHTML;
    carousel_images.innerHTML=carousel1_pics;
    if(carousel.style.display == "" || carousel.style.display == "none"){
        carousel.style.display = "block";}
        else {carousel.style.display = "none";}
    
}



document.querySelector('.filter-search').onclick = () =>{
    var x,i,vc;
    let marka = document.getElementById('marka').value;
    let godiste =document.getElementById('godiste').value;
    let karoserija =document.getElementById('karoserija').value;
    let cena =document.getElementById('cene').value;
    vc=document.querySelector(".vehicle-container");
    
   var auto= document.querySelector('.container .vehicle-container .vehicle .col .desc-1 h3').innerHTML;
    var godup,goddown,cenaup,cenadown;
    x= document.getElementsByClassName("vehicle");
    
    for(i=0;i<x.length;i++){
        x[i].style.display="none";}

        switch(cena){
            case "1": cenadown=0; cenaup=1000;break;
            case "2": cenadown=1001; cenaup=5000;break;
            case "3": cenadown=5001; cenaup=10000;break;
            case "4": cenadown=10001; cenaup=999999;break;
            default: cenadown=0; cenaup=999999;break;
        }

    if(godiste==1){godup=2000;goddown=0;}
    
        if(godiste==2){godup=2010;goddown=2001;}
        
           if(godiste==3){ godup=2022;goddown=2011;}

            if(godiste=="all"){godup=9999;goddown=0;}
        
    
    var god2=x[0].querySelector(".vehicle-age").innerHTML;
    var counter=0;
    for(i=0;i<x.length;i++){
        var auto1=x[i].querySelector("h3").innerHTML;
        var type=x[i].querySelector(".vehicle-type").innerHTML;
        var god1=x[i].querySelector(".vehicle-age").innerHTML;
        var price=x[i].querySelector(".price").innerHTML;
        if(auto1.includes(marka) && god1>goddown && god1<godup && type.includes(karoserija) && price<=cenaup && price>=cenadown){
            counter++;
            x[i].style.display="block";
        }


    }
    var xe=window.innerWidth;
    if(counter<=1 && xe>700){vc.style.padding="0px 90px 500px 90px";}
    else{vc.style.padding="0px 10px 500px 10px";} 

    
  
 
}

