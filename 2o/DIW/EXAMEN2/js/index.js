function animar(id) {
    var cuadradoElement=document.getElementById(id);
    cuadradoElement.classList.remove("c-noticia--animar");
    setTimeout(function() {
        cuadradoElement.classList.add("c-noticia--animar");
        
    },10);
    
    
}