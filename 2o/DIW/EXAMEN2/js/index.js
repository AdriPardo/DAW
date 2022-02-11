function animar(id) {
    var cuadradoElement=document.getElementById(id);
    cuadradoElement.classList.remove("c-noticia--animar");
    setTimeout(function() {
        cuadradoElement.classList.add("c-noticia--animar");
        setTimeout(() => {
            cuadradoElement.remove();
        }, 1050);
    },0);
    
    
}