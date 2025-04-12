var numeroAleatorio = parseInt(Math.random() * 101);
var tentativa = 3;
var result = document.getElementById("result");

function chutar() {
    var valor = parseInt(document.getElementById("valor").value);

    if (valor == numeroAleatorio) {
      result.innerHTML =
        "Parabéns você ganhou 20% de desconto na sua próxima visita!";
        document.getElementById("buttonPromo").disabled = true;
        return;
    }
    
    if (valor < 0 || valor > 100) {
        result.innerHTML = "Valor inválido. Apenas números entre 0 e 100."
        return;
    }

    tentativa--;

    if (valor < numeroAleatorio) {
        result.innerHTML =
          "Errou. " + "Tentativas Restantes " + tentativa;          
}

if (tentativa == 0) {
    result.innerHTML =
      "acabaram as tentativas o número da sorte era " + numeroAleatorio; 
      document.getElementById("buttonPromo").disabled = true
      
}
}