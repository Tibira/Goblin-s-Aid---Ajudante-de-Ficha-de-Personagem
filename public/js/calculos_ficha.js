var forca = document.getElementById("forca");
var destreza = document.getElementById("destreza");
var constituicao = document.getElementById("constituicao");
var inteligencia = document.getElementById("inteligencia");
var sabedoria = document.getElementById("sabedoria");
var carisma = document.getElementById("carisma");
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
var btCalcular = document.getElementById("btCalcular");


function conta(numero) {

    if (numero == "") {
        alert("Falta informações");
        return
    }
    if (isNaN(numero)) {
        alert("Informe um número");
        return
    }
    if (numero < 3 || numero > 20) {
        alert("Informe um número entre 3 e 20");
        return
    }
    return Math.floor((numero - 10) / 2);
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
function marked(checkbox, pericia, atributo) {
    if (checkbox.checked == true) {
        return pericia.value = conta(atributo.value) + Number(proficiencia.value);
    } else {
        return pericia.value = conta(atributo.value);
    }
}

btCalcular.addEventListener("click", calcular);
window.addEventListener("load", calcular);