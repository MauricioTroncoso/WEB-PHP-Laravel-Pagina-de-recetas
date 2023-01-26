let animado=document.querySelectorAll(".animado");
function mostrarScroll(){
    let scrollTop= document.documentElement.scrollTop;
    for( var i=0; i<animado.length;i++){
        let altAnimado= animado[i].offsetTop;

        if(altAnimado -300 < scrollTop){
            animado[i].style.opacity =1;
            animado[i].classList.add("mostrar");
        }
    }
}
window.addEventListener('scroll',mostrarScroll);
