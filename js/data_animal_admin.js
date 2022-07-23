const server = "http://localhost/petcare/";
const pathImage = "img/animals/";

async function getData() {

    try {

        const url = `http://localhost/petcare/view/view_vw_animais.php?login=admin&&senha=petcare`;
        const data = await fetch(url);
        const dataAllAnimals = await data.json();

        return dataAllAnimals;

    } catch (e) {

        return {
            "success" : false,
            "error" : "Houve um erro ao tentar ver os dados dos animais, por favor reinicie a página, se o erro persistir contate o responsável pela manutenção do sistema!"
        };

    }


}

const animals = getData();

console.log(animals)
console.log(animals.success);
// if(animal.success){

// }