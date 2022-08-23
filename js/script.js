function trocar() {

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

function fechar() {
    var element = document.querySelector(".alert")
    element.classList.add("hidden-ativo");
}

function closeMenu(){
    inactivate("container-menu-mobile");
}

// Função para deixar um item com display none
const inactivate = (element) => {
    document.getElementById(element).classList.remove("hidden-inativo");
    document.getElementById(element).classList.add("hidden-ativo");
}

// Função para remover o display none
const activate = (element) => {
    document.getElementById(element).classList.remove("hidden-ativo");
    document.getElementById(element).classList.add("hidden-inativo");
}







