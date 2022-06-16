function validacao(){

    let foto = document.getElementById("i_foto");

    verifica_arquivo(foto);

}

function verifica_arquivo(input){

    let arquivo = input.files[0].name;
    let extensao = arquivo.substring(arquivo.lastIndexOf(".")).toLowerCase();
    let tamanho = parseInt(input.files[0].size);
    tamanho = tamanho / 1008;

    let erro_tipo = document.getElementById("erro_tipo");
    let erro_tamanho = document.getElementById("erro_tamanho");

    if(extensao == ".png" || extensao == ".jpg" || extensao == ".jpeg" || extensao == ".gif"){
        if(tamanho > 2016){
            erro_tamanho.style.display = "block";
            return false;
        }else{
            return true;
        }
    }else{
        erro_tipo.style.display = "block";
        return false;
    }

}