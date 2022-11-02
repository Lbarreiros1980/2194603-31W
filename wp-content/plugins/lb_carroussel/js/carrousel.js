(function(){
    console.log("carrousel");

    let elmGalerie = document.querySelector(".galerie")
    let elmGalerieImg = document.querySelectorAll(".galerie img")
    let elmBouton = document.querySelector('.bouton');
    let elmCarrousel = document.querySelector('.carrousel')
    let elmCarrousel__x = document.querySelector(".carrousel__x")
    let elmCarrousel__figure = document.querySelector(".carrousel__figure")
    let elmCarrousel__form = document.querySelector(".carrousel__form")
    let index = 0;
    let dernierIndex = index;
    


    elmBouton.addEventListener('mousedown',function(){
        console.log("ouverture de caroussel");
        elmCarrousel.classList.add("carrousel--ouvrir");
            for (const elmImg of elmGalerieImg){
                ajout_img_dans_carrousel(elmImg);
                ajout_radio_dans_carrousel();
            }

    });


    elmCarrousel__x.addEventListener('mousedown', function(){
        console.log("fermeture de caroussel");
        elmCarrousel.classList.remove("carrousel--ouvrir");
        for (const elmImg of elmGalerieImg){
            console.log(getAttribute('src'))
    }
    });


   function ajout_img_dans_carrousel(elmImg){
        let elmCarrouselImg = document.createElement('img') //creer un element IMG dans le dom
            elmCarrouselImg.setAttribute('src', elmImg.getAttribute('src'));//copia o 'src' de une image a l'autre.
            elmCarrouselImg.classList.add('carrousel__figure__img') 
            elmCarrousel__figure.appendChild(elmCarrouselImg)
   };

   function ajout_radio_dans_carrousel(){
    let elmCarrousel__form__radio = document.createElement('input')
        elmCarrousel__form__radio.setAttribute("type", "radio");
        elmCarrousel__form__radio.setAttribute("name", "carrousel__form__rad");
        elmCarrousel__form__radio.classList.add("carrousel__form__rad");
        elmCarrousel__form__radio.dataset.index = index;
        index++
        elmCarrousel__form.appendChild(elmCarrousel__form__radio);
        if(dernierIndex != -1){
            elmCarrousel__figure.children[dernierIndex].classList.remove("carrousel__figure__img--activer")
        }

        elmCarrousel__form__radio.addEventListener('mousedown',function(){
            console.log(this.dataset.index);
            elmCarrousel__figure.children[this.dataset.index];
            elmCarrousel__figure.children[this.dataset.index].classList.add('carrousel__figure__img--activer')
            dernierIndex = this.dataset.index;
        })
   };

})();