function abrirDescricao(carregarDescricao){
    //console.log("Carregar a descrição do remedio: " + carregarDescricao);

    let desc = document.getElementById(carregarDescricao);

    desc.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function reservarDescricao(reservarDescri){
    //console.log("Carregar a reserva" + reservarDescri);

    let desc = document.getElementById(reservarDescri);

    desc.style.display = 'none';
   document.body.style.overflow = 'auto';
    

}