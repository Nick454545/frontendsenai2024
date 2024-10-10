const imgBanner = ['img\500px_photo_(70560973).jpeg'];
// definimosas imagens do banner

let fotoInicial = 0;
// index inicial da foto do banner

function slider(){
    //encontrar o banner da pg
    const banner = document.getElementById('banner');
    banner.style.backgroundImagem = 
    `url('${imgBanner[fotoInicial]}')`;
    fotoInicial++;
    // mudar para a proxima foto
    if(fotoInicial >= imgBanner.legnt){
        fotoInicial = 0;
    }
}

setInterval(slider, 2500)