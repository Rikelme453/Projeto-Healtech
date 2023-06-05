/*reutilização do código de perfil user*/
//Codificação para funcionalidade de prewiew do medicamento
function previewRemedio(){
    var recebeMedimg = document.querySelector('input[name=pegar]').files[0];
    var previewMed = document.querySelector('img[name=remedioimg]');

    var lerMed = new FileReader();

    lerMed.onload = function(){
        previewMed.src = lerMed.result;

    }
    if(recebeMedimg){
        lerMed.readAsDataURL(recebeMedimg);
    }else{
        previewMed.src="";
    }
}