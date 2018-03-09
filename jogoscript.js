function verificar() {
    var quadrado1 = document.getElementBYId("quadrado1").innerHTML;
    var quadrado2 = document.getElementById("quadrado2").value;
    
    if(quadrado1 == quadrado2){
        alert("VOCÊ ACERTOU CONTINUE ASSIM");
    }
    else{
     alert("VOCÊ ERROU ");
    }
    resetar();
}
function resetar() {
    document.getElementById("quadrado2").value = "";
    
    var r = Math.floor(Math.random() * 100);//Fazendo um numero aleatorio no javascript
    document.getElementById("quadrado1").innerHTML = r;
}