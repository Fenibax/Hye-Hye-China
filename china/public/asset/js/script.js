document.addEventListener("DOMContentLoaded", function(){

    var ent = document.getElementById("ent");
    var pla = document.getElementById("pla");
    var dess = document.getElementById("dess");
    var Entree1 = document.querySelector("#Entree1")
    var Plat1 = document.querySelector("#Plat1")
    var Dessert1 = document.querySelector("#Dessert1")
    var boolA = true;
    var boolB = false;
    var boolC = false;
    
    ent.addEventListener("click", function(){
        Entree1.classList.toggle('visible');
        Entree1.classList.toggle('invisible');
boolA = !boolA;
if (boolB) {
Plat1.classList.remove('visible')
Plat1.classList.add('invisible')
boolB = !boolB 
} 
if (boolC) {
Dessert1.classList.remove('visible')
Dessert1.classList.add('invisible')
boolC = !boolC
} 
else {
result = 'NOT positive';
}
    })
    pla.addEventListener("click", function(){
        Plat1.classList.toggle('visible');
        Plat1.classList.toggle('invisible');
        boolB = !boolB  
        if (boolA) {
Entree1.classList.remove('visible')
Entree1.classList.add('invisible')
boolA = !boolA;
} 
if (boolC) {
Dessert1.classList.remove('visible')
Dessert1.classList.add('invisible')
boolC = !boolC
} 
else {
result = 'NOT positive';
} 
    })
    dess.addEventListener("click", function(){
        Dessert1.classList.toggle('visible');
        Dessert1.classList.toggle('invisible');
        boolC = !boolC
        if (boolB) {
Plat1.classList.remove('visible')
Plat1.classList.add('invisible')
boolB = !boolB 
} 
if (boolA) {
Entree1.classList.remove('visible')
Entree1.classList.add('invisible')
boolA = !boolA;
}
 if (Plat1 === false && Dessert1 === false){
    Entree1 = true
}  
else {
result = 'NOT positive';
}
    })

})