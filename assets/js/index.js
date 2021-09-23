let slider = document.querySelector(".slide-container")
let sliderIndividual = document.querySelectorAll(".slide_section")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 7000;

let botones_slide = document.getElementsByClassName('button_slide')
let btn_slid1=document.querySelector('#btn_slid1')
let btn_slid2=document.querySelector('#btn_slid2')
let btn_slid3=document.querySelector('#btn_slid3')
//botones_slide[0].classList.add('active')


window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);



function slides(){
    for(i=0;i<botones_slide.length;i++){
        botones_slide[i].classList.remove('active')
    }
    
    
    if(contador == sliderIndividual.length){
        botones_slide[0].classList.add('active')
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1; 
        },2000)
    }else{
        
        slider.style.transform = "translate("+(-width*contador)+"px)";
        slider.style.transition = "transform .8s";
        botones_slide[contador].classList.add('active')
        contador++;
    }
    
}




btn_slid1.addEventListener("click",()=>{
    //alert("click boton1")
    contador=0;
    slides();

})

btn_slid2.addEventListener("click",()=>{
    contador=1;
    slides();

})

btn_slid3.addEventListener("click",()=>{
    contador=2;
    slides();
})