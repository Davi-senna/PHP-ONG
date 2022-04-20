function trocar(){
    
    var hidden = document.querySelectorAll(".hidden-ativo")
    var noHidden = document.querySelectorAll(".hidden-inativo")
    
    hidden.forEach(
        element => {
            element.classList.add("hidden-inativo");
            element.classList.remove("hidden-ativo");
        }
    )

    noHidden.forEach(
        element => {
            element.classList.add("hidden-ativo");
            element.classList.remove("hidden-inativo");
        }
    )
}

function inverterBotao(){

    var ativo = document.querySelectorAll(".circle-ativo")
    var inativo = document.querySelectorAll(".circle-inativo")
    
    ativo.forEach(
        element => {
            element.classList.add("circle-inativo");
            element.classList.remove("circle-ativo");
        }
    )

    inativo.forEach(
        element => {
            element.classList.add("circle-ativo");
            element.classList.remove("circle-inativo");
        }
    )
}


function cadastrarAnimal(){
   var results = confirm("Tem certeza de que os dados estão corretos?");
   if(results == 1){



        trocar();
        inverterBotao();
        
   }
}

function cadastrarResponsavel(){
    var results = confirm("Tem certeza de que os dados estão corretos?");
    if(results == 1){
 
         
        window.location.href = "../pg_admin.php?success='Animal inserido com sucesso'";
    }
}





