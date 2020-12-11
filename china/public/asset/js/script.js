document.addEventListener("DOMContentLoaded", function () {

    var ent = document.getElementById("ent");
    var pla = document.getElementById("pla");
    var dess = document.getElementById("dess");
    var boiss = document.getElementById("boiss");
    var Entree1 = document.querySelector("#Entree1")
    var Plat1 = document.querySelector("#Plat1")
    var Dessert1 = document.querySelector("#Dessert1")
    var Boisson1 = document.querySelector("#Boisson1")
    var boolA = true;
    var boolB = false;
    var boolC = false;
    var boolD = false;

    ent.addEventListener("click", function () {
        if (!boolA){
        Entree1.classList.toggle('visible');
        Entree1.classList.toggle('invisible');
        boolA = !boolA;
    }
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
        if (boolD) {
            Boisson1.classList.remove('visible')
            Boisson1.classList.add('invisible')
            boolD = !boolD
        }
        else {
            result = 'NOT positive';
        }
    })
    pla.addEventListener("click", function () {
        if (!boolB){
        Plat1.classList.toggle('visible');
        Plat1.classList.toggle('invisible');
        boolB = !boolB
        }
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
        if (boolD) {
            Boisson1.classList.remove('visible')
            Boisson1.classList.add('invisible')
            boolD = !boolD
        }
        else {
            result = 'NOT positive';
        }
    })
    boiss.addEventListener("click", function () {
        if (!boolD){
        Boisson1.classList.toggle('visible');
        Boisson1.classList.toggle('invisible');
        boolD = !boolD
        }
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
        if (boolB) {
            Plat1.classList.remove('visible')
            Plat1.classList.add('invisible')
            boolB = !boolB
        }
        else {
            result = 'NOT positive';
        }
    })
    dess.addEventListener("click", function () {
        if (!boolC){
        Dessert1.classList.toggle('visible');
        Dessert1.classList.toggle('invisible');
        boolC = !boolC
        }
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
        if (boolD) {
            Boisson1.classList.remove('visible')
            Boisson1.classList.add('invisible')
            boolD = !boolD
        }
        if (Plat1 === false && Dessert1 === false && Boisson1 === false ) {
            Entree1 = true
        }
        else {
            result = 'NOT positive';
        }
    })

})