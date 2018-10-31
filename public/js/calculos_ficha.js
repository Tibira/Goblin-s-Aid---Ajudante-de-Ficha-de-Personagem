
var acrobacia = document.getElementById("acrobacia");
var ckAcro = document.getElementById("ckAcro");
var arcanismo = document.getElementById("arcanismo");
var ckArca = document.getElementById("ckArca");
var atletismo = document.getElementById("atletismo");
var ckAtle = document.getElementById("ckAtle");
var atuacao = document.getElementById("atuacao");
var ckAtua = document.getElementById("ckAtua");
var blefar = document.getElementById("blefar");
var ckBlef = document.getElementById("ckBlef");
var furtividade = document.getElementById("furtividade");
var ckFurt = document.getElementById("ckFurt");
var historia = document.getElementById("historia");
var ckHist = document.getElementById("ckHist");
var intimidacao = document.getElementById("intimidacao");
var ckInti = document.getElementById("ckInti");
var intuicao = document.getElementById("intuicao");
var ckIntu = document.getElementById("ckIntu");
var investigacao = document.getElementById("investigacao");
var ckInve = document.getElementById("ckInve");
var lidar_animais = document.getElementById("lidar_animais");
var ckLida = document.getElementById("ckLida");
var medicina = document.getElementById("medicina");
var ckMedi = document.getElementById("ckMedi");
var natureza = document.getElementById("natureza");
var ckNatu = document.getElementById("ckNatu");
var percepcao = document.getElementById("percepcao");
var ckPerc = document.getElementById("ckPerc");
var persuasao = document.getElementById("persuasao");
var ckPers = document.getElementById("ckPers");
var prest = document.getElementById("presti");
var ckPrest = document.getElementById("ckPrest");
var religiao = document.getElementById("religiao");
var ckReli = document.getElementById("ckReli");
var sobrevivencia = document.getElementById("sobrevivencia");
var ckSobr = document.getElementById("ckSobr");

var proficiencia = document.getElementById("bon_proficiencia");

var pcobre = document.getElementById("pcobre");
var pprata = document.getElementById("pprata");
var peletron = document.getElementById("peletron");
var pouro = document.getElementById("pouro");
var pplatina = document.getElementById("pplatina");

var xp = document.getElementById("experiencia");
var addxp = document.getElementById("addXP");

var pv_atual = document.getElementById("pontos_vida_temporarios");
var pv_total = document.getElementById("pontos_vida_total");

var forca = document.getElementById("forca");
var destreza = document.getElementById("destreza");
var constituicao = document.getElementById("constituicao");
var inteligencia = document.getElementById("inteligencia");
var sabedoria = document.getElementById("sabedoria");
var carisma = document.getElementById("carisma");

var nivel = document.getElementById("nivel");

var addcobre = document.getElementById("addcobre");
var addprata = document.getElementById("addprata");
var addeletron = document.getElementById("addeletron");
var addouro = document.getElementById("addouro");
var addplatina = document.getElementById("addplatina");

var nivel1 = document.getElementById("nivel1");
var nivel2 = document.getElementById("nivel2");
var nivel3 = document.getElementById("nivel3");
var nivel4 = document.getElementById("nivel4");
var nivel5 = document.getElementById("nivel5");
var nivel6 = document.getElementById("nivel6");
var nivel7 = document.getElementById("nivel7");
var nivel8 = document.getElementById("nivel8");
var nivel9 = document.getElementById("nivel9");

var btMaglvl1 = document.getElementById("btMaglvl1");
var btMaglvl2 = document.getElementById("btMaglvl2");
var btMaglvl3 = document.getElementById("btMaglvl3");
var btMaglvl4 = document.getElementById("btMaglvl4");
var btMaglvl5 = document.getElementById("btMaglvl5");
var btMaglvl6 = document.getElementById("btMaglvl6");
var btMaglvl7 = document.getElementById("btMaglvl7");
var btMaglvl8 = document.getElementById("btMaglvl8");
var btMaglvl9 = document.getElementById("btMaglvl9");

var btCalcular = document.getElementById("btCalcular");
var btDescansar = document.getElementById("btDescansar");
var btLevel = document.getElementById("btLevel");
var btAddxp = document.getElementById("btAddxp");
var btMoedas = document.getElementById("btMoedas");

var txtFicha = document.getElementById("txtFicha");

var cobre = Number(pcobre.value);
var prata = Number(pprata.value);
var eletron = Number(peletron.value);
var ouro = Number(pouro.value);
var platina = Number(pplatina.value);

function conta(numero) {

    if (isNaN(numero)) {
        alert("Informe um número");
        return
    }
    if (numero == "" || numero == null) {
        alert("Informe um número");
        return
    }
    if (numero < 3 || numero > 20) {
        alert("Informe um número entre 3 e 20");
        return
    }
    return Math.floor((numero - 10) / 2);
}

function iniciaFicha() {

}

function calcVida() {
    do {
        var result = confirm("Seu personagem subiu de nível!!!\n\nClique 'OK' para gerar pontos de vida aleatório ou 'Cancelar' par gerar um número mediano.");
        if (result == true) {
            var x = Math.floor(1 + Math.random() * 8);
            pv_total.value = Number(pv_total.value) + x;
            alert("Foi gerado o número " + x + ", com seu modificador de constituição " + Math.floor((constituicao.value - 10) / 2) + ", seus pontos de vida ficaram " + pv_total.value + ".");
        } else {
            pv_total.value = Number(pv_total.value) + Math.floor((constituicao.value - 10) / 2) + 5;
        }
    } while (result == null);
}

function marked(checkbox, pericia, atributo) {
    if (checkbox.checked == true) {
        return pericia.value = conta(atributo.value) + Number(proficiencia.value);
    } else {
        return pericia.value = conta(atributo.value);
    }
}

function diminuiMagia1() {
    if (nivel1.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel1.value;
        nivel1.value = r - 1;
    }
}
function diminuiMagia2() {
    if (nivel2.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel2.value;
        nivel2.value = r - 1;
    }
}
function diminuiMagia3() {
    if (nivel3.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel3.value;
        nivel3.value = r - 1;
    }
}
function diminuiMagia4() {
    if (nivel4.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel4.value;
        nivel4.value = r - 1;
    }
}
function diminuiMagia5() {
    if (nivel5.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel5.value;
        nivel5.value = r - 1;
    }
}
function diminuiMagia6() {
    if (nivel6.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel6.value;
        nivel6.value = r - 1;
    }
}
function diminuiMagia7() {
    if (nivel7.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel7.value;
        nivel7.value = r - 1;
    }
}
function diminuiMagia8() {
    if (nivel8.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel8.value;
        nivel8.value = r - 1;
    }
}
function diminuiMagia9() {
    if (nivel9.value < 1) {
        alert("Você não tem mais magias desse nível!")
    } else {
        var r = nivel9.value;
        nivel9.value = r - 1;
    }
}

function addexp() {
    var x = Number(xp.value);
    x += Number(addxp.value);
    xp.value = x;
    lvlXP();
    addxp.value = "0";
}

function descansar() {
    pv_atual.value = pv_total.value;
    if (nivel.value == 1) {
        nivel1.value = 2;
    }
    if (nivel.value == 2) {
        nivel1.value = 3;
    }
    if (nivel.value == 3) {
        nivel1.value = 4;
        nivel2.value = 2;
    }
    if (nivel.value == 4) {
        nivel1.value = 4;
        nivel2.value = 2;
    }
    if (nivel.value == 5) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 2;
    }
    if (nivel.value == 6) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
    }
    if (nivel.value == 7) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 1;
    }
    if (nivel.value == 8) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 2;
    }
    if (nivel.value == 9) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 1;
    }
    if (nivel.value == 10) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
    }
    if (nivel.value == 11) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
    }
    if (nivel.value == 12) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
    }
    if (nivel.value == 13) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
        nivel7.value = 1;
    }
    if (nivel.value == 14) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
        nivel7.value = 1;
    }
    if (nivel.value == 15) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
        nivel7.value = 1;
        nivel8.value = 1;
    }
    if (nivel.value == 16) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
        nivel7.value = 1;
        nivel8.value = 1;
    }
    if (nivel.value == 17) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 2;
        nivel6.value = 1;
        nivel7.value = 1;
        nivel8.value = 1;
        nivel9.value = 1;
    }
    if (nivel.value == 18) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 3;
        nivel6.value = 1;
        nivel7.value = 1;
        nivel8.value = 1;
        nivel9.value = 1;
    }
    if (nivel.value == 19) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 3;
        nivel6.value = 2;
        nivel7.value = 1;
        nivel8.value = 1;
        nivel9.value = 1;
    }
    if (nivel.value == 20) {
        nivel1.value = 4;
        nivel2.value = 3;
        nivel3.value = 3;
        nivel4.value = 3;
        nivel5.value = 3;
        nivel6.value = 2;
        nivel7.value = 2;
        nivel8.value = 1;
        nivel9.value = 1;
    }
}

function calcular() {
    marked(ckAcro, acrobacia, destreza);
    marked(ckArca, arcanismo, inteligencia);
    marked(ckAtle, atletismo, forca);
    marked(ckAtua, atuacao, carisma);
    marked(ckBlef, blefar, carisma);
    marked(ckFurt, furtividade, destreza);
    marked(ckHist, historia, inteligencia);
    marked(ckInti, intimidacao, carisma);
    marked(ckIntu, intuicao, sabedoria);
    marked(ckInve, investigacao, inteligencia);
    marked(ckLida, lidar_animais, sabedoria);
    marked(ckMedi, medicina, sabedoria);
    marked(ckNatu, natureza, inteligencia);
    marked(ckPerc, percepcao, sabedoria);
    marked(ckPers, persuasao, carisma);
    marked(ckPrest, prest, destreza);
    marked(ckReli, religiao, inteligencia);
    marked(ckSobr, sobrevivencia, sabedoria);
}

function atualizar() {
    if (Number(nivel.value) == 20) {
        alert("Esse personagem já esta no nível maximo");
        return;
    }
    var lvl = Number(nivel.value);
    nivel.value = lvl += 1;
    if (lvl == 2) {
        xp.value = 300;
    }
    if (lvl == 3) {
        xp.value = 900;
    }
    if (lvl == 4) {
        xp.value = 2700;
    }
    if (lvl == 5) {
        xp.value = 6500;
        proficiencia.value = 3;
    }
    if (lvl == 6) {
        xp.value = 14000;
    }
    if (lvl == 7) {
        xp.value = 23000;
    }
    if (lvl == 8) {
        xp.value = 34000;
    }
    if (lvl == 9) {
        xp.value = 48000;
        proficiencia.value = 4;
    }
    if (lvl == 10) {
        xp.value = 64000;
    }
    if (lvl == 11) {
        xp.value = 85000;
    }
    if (lvl == 12) {
        xp.value = 100000;
    }
    if (lvl == 13) {
        xp.value = 120000;
        proficiencia.value = 5;
    }
    if (lvl == 14) {
        xp.value = 140000;
    }
    if (lvl == 15) {
        xp.value = 165000;
    }
    if (lvl == 16) {
        xp.value = 195000;
    }
    if (lvl == 17) {
        xp.value = 255000;
        proficiencia.value = 6;
    }
    if (lvl == 18) {
        xp.value = 265000;
    }
    if (lvl == 19) {
        xp.value = 305000;
    }
    if (lvl == 20) {
        xp.value = 355000;
    }
    calcVida();
}

function lvlXP() {
    var exp = Number(xp.value);
    var x = nivel.value;
    if (exp >= 0 && exp <= 299) {
        nivel.value = 1;
    }
    if (exp >= 300 && exp <= 899) {
        nivel.value = 2;
    }
    if (exp >= 900 && exp <= 2699) {
        nivel.value = 3;
    }
    if (exp >= 2700 && exp <= 6499) {
        nivel.value = 4;
    }
    if (exp >= 6500 && exp <= 13999) {
        nivel.value = 5;
        proficiencia.value = 3;
    }
    if (exp >= 14000 && exp <= 22999) {
        nivel.value = 6;
    }
    if (exp >= 23000 && exp <= 33999) {
        nivel.value = 7;
    }
    if (exp >= 34000 && exp <= 47999) {
        nivel.value = 8;
    }
    if (exp >= 48000 && exp <= 63999) {
        nivel.value = 9;
        proficiencia.value = 4;
    }
    if (exp >= 64000 && exp <= 84999) {
        nivel.value = 10;
    }
    if (exp >= 85000 && exp <= 99999) {
        nivel.value = 11;
    }
    if (exp >= 10000 && exp <= 119999) {
        nivel.value = 12;
    }
    if (exp >= 120000 && exp <= 139999) {
        nivel.value = 13;
        proficiencia.value = 5;
    }
    if (exp >= 140000 && exp <= 164999) {
        nivel.value = 14;
    }
    if (exp >= 165000 && exp <= 194999) {
        nivel.value = 15;
    }
    if (exp >= 195000 && exp <= 224999) {
        nivel.value = 16;
    }
    if (exp >= 225000 && exp <= 264999) {
        nivel.value = 17;
        proficiencia.value = 6;
    }
    if (exp >= 265000 && exp <= 304999) {
        nivel.value = 18;
    }
    if (exp >= 305000 && exp <= 354999) {
        nivel.value = 19;
    }
    if (exp == 355000) {
        nivel.value = 20;
    }
    if (exp > 355000) {
        alert("Esse personagem não pode ter mais experiência")
        xp.value = 355000;
    }
    if (nivel.value != x) {
        calcVida();
    }

}

function dinheiro() {
    if (cobre >= 100) {
        prata += 1;
        cobre += -100;
    }else if(cobre <=0){
        prata += -1;
        cobre += 100;
    }
    if (prata >= 100) {
        eletron += 1;
        prata += -100;
    }else if(prata<=0){
        eletron += -1;
        prata += 100;
    }
    if (eletron >= 100) {
        ouro += 1;
        eletron += -100;
    }else if(eletron<=0){
        ouro += -1;
        eletron += 100;
    }
    if (ouro >= 100) {
        platina += 1;
        ouro += -100;
    }else if(ouro<=0){
        platina += -1;
        ouro += 100;
    }
    pcobre.value = cobre;
    pprata.value = prata;
    peletron.value = eletron;
    pouro.value = ouro;
    pplatina.value = platina;
}

function addmoedas(){
    addCobre= Number(addcobre.value);
    addPrata= Number(addprata.value);
    addEletron= Number(addeletron.value);
    addOuro= Number(addouro.value);
    addPlatina= Number(addplatina.value);
    cobre += addCobre;
    prata+=addPrata;
    eletron+=addEletron;
    ouro+=addOuro;
    platina+=addPlatina;
    addcobre.value = 0;
    addprata.value = 0;
    addeletron.value = 0;
    addouro.value = 0;
    addplatina.value = 0;
    dinheiro();
}

function rmmoedas(){
    addCobre= Number(addcobre.value);
    addPrata= Number(addprata.value);
    addEletron= Number(addeletron.value);
    addOuro= Number(addouro.value);
    addPlatina= Number(addplatina.value);
    cobre += -addCobre;
    prata+= - addPrata;
    eletron+= -addEletron;
    ouro+= -addOuro;
    platina+= -addPlatina;
    addcobre.value = 0;
    addprata.value = 0;
    addeletron.value = 0;
    addouro.value = 0;
    addplatina.value = 0;
    dinheiro();
}


btMaglvl1.addEventListener("click", diminuiMagia1);
btMaglvl2.addEventListener("click", diminuiMagia2);
btMaglvl3.addEventListener("click", diminuiMagia3);
btMaglvl4.addEventListener("click", diminuiMagia4);
btMaglvl5.addEventListener("click", diminuiMagia5);
btMaglvl6.addEventListener("click", diminuiMagia6);
btMaglvl7.addEventListener("click", diminuiMagia7);
btMaglvl8.addEventListener("click", diminuiMagia8);
btMaglvl9.addEventListener("click", diminuiMagia9);

btCalcular.addEventListener("click", dinheiro);
btDescansar.addEventListener("click", descansar);
btLevel.addEventListener("click", atualizar);
btAddxp.addEventListener("click", addexp);
btMoedas.addEventListener("click", addmoedas);
btRmMoedas.addEventListener("click", rmmoedas);
//window.addEventListener("load", calcular);