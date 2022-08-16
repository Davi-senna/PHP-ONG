const server = "http://localhost/petcare/";
const pathImage = "img/animals/";
var animals;


async function feedSystem() {

    try {

        const url = `http://localhost/petcare/view/view_vw_animais.php?login=admin&&senha=petcare`;
        const data = await fetch(url);
        animals = await data.json();

        return {
            "success" : true
        };

        
    } catch (e) {

        return {
            "success" : false,
            "error" : "Houve um erro ao tentar ver os dados dos animais, por favor reinicie a página, se o erro persistir contate o responsável pela manutenção do sistema!"
        };

    }


}


function createElementListAnimals(){

}




