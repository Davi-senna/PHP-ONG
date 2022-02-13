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

