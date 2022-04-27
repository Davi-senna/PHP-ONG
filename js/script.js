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


$(document).ready(() => {

    var id_animal;

    $('#input-image').change((e) => {

        var image = $("#input-image");

        if (window.FileReader) {
            var file = e.target.files[0];
            var reader = new FileReader();
            if (file && file.type.match('image.*')) {
                //console.log(file)
                reader.readAsDataURL(file);
            } else {
                image.attr('src', '');
            }
            reader.onloadend = function (e) {
                image.attr('src', reader.result);
                //console.log(e.target.result)
                
            }
        }
    })


    $("#form-data-animal").submit((e) => {
        e.preventDefault();

        var form_data = new FormData(document.getElementById("form-data-animal"))
        

        $.ajax({

            url: "../../../view_animal.php?stmt=insert",
            type: "POST",
            cache: false,
            processData:false,
            contentType:false,
            data: form_data,
            dataType: 'json'

        }).done((results) => {
            console.log(results);

            if(typeof(results["success"]) != undefined){
                id_animal = results["id_animal"];
                trocar();
            }
        })
    })

    $("#form-data-responsavel").submit((e) => {
        e.preventDefault();

        var form_data = new FormData(document.getElementById("form-data-responsavel"))
        

        $.ajax({

            url: "../../../view_responsavel.php?stmt=insert",
            type: "POST",
            cache: false,
            processData:false,
            contentType:false,
            data: {form_data,id_animal},
            dataType: 'json'

        }).done((results) => {
            console.log(results);

            /*if(typeof(results["success"]) != undefined){

                window.location.href = "../pg_admin.php?success='Animal inserido com sucesso'";
                
            }*/
        })
    })

});







