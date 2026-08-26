document.getElementById("formagenda").addEventListener("submit",function(e){
    e.preventDefault();

    let NOME= document.getElementById("NOME").value;
    let TELEFONE= document.getElementById("TELEFONE").value;

    fetch("salvar.php",{
    method:"POST",
    headers:{"Content-Type":"application/x-www-form-urlencoded"
    },
    body:`NOME=${NOME}&TELEFONE=${TELEFONE}`    
    })
    .then(response => response.text())
    .then(dados=>{
        document.getElementById("mensagem").innerHTML = dados;
        document.getElementById("formagenda").reset();
        carregartabela();
    });

});
function carregartabela(){
    fetch("listar.php")
    .then(response => response.text())
    .then(dados=>{
        document.getElementById("tabelacontatos").innerHTML = dados;
    })

.catch(error => {
console.error(error);

})

}
carregartabela();