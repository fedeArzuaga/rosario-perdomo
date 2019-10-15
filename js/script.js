// Obteniendo elementos del DOM

var iconMenu = document.getElementById("iconMenu");
var vMenuTop = document.getElementById("varTopMenu");
var vMenuMiddle = document.getElementById("varMiddleMenu");
var vMenuBottom = document.getElementById("varBottomMenu");
var menuContainer = document.getElementById("menuSite");

// Items del Menu

var itemInicio = document.getElementById("showInicio");
var itemSobreMi = document.getElementById("showSobreMi");
var itemServicios = document.getElementById("showServicios");
var itemEventos = document.getElementById("showEventos");
var itemAgendarme = document.getElementById("showAgendarme");
var itemTestimonios = document.getElementById("showTestimonios");

itemInicio.addEventListener("click", closeMenu);
itemSobreMi.addEventListener("click", closeMenu);
itemServicios.addEventListener("click", closeMenu);
itemEventos.addEventListener("click", closeMenu);
itemAgendarme.addEventListener("click", closeMenu);
itemTestimonios.addEventListener("click", closeMenu);

iconMenu.addEventListener("click", showMenu);

function showMenu(){
    
    if( vMenuTop.className === "var-menu var-top" ){
        
        vMenuTop.className = "var-menu var-top-x";
        vMenuMiddle.className = "var-menu var-middle-x";
        vMenuBottom.className = "var-menu var-bottom-x";
        
        menuContainer.className = "menuSite";
        
        document.getElementsByTagName("html")[0].style.overflow = "hidden";
       
        
    }else{
        
        vMenuTop.className = "var-menu var-top";
        vMenuMiddle.className = "var-menu var-middle";
        vMenuBottom.className = "var-menu var-bottom";
        
        menuContainer.className = "menuSite hideMenuSite";
        
        document.getElementsByTagName("html")[0].style.overflow = "auto";
        
    }
}

function closeMenu(){
       
    menuContainer.className = "menuSite hideMenuSite";
    
    vMenuTop.className = "var-menu var-top";
    vMenuMiddle.className = "var-menu var-middle";
    vMenuBottom.className = "var-menu var-bottom";
    
    document.getElementsByTagName("html")[0].style.overflow = "auto";
   
}