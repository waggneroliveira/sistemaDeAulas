/* Mascaras usando inputmask.js */
/* ref: https://github.com/RobinHerbots/Inputmask */
if (document.querySelector(".cpf")) {
    document
        .querySelectorAll(".cpf")
        .forEach((item) => Inputmask({ mask: "999.999.999-99" }).mask(item));
}

if (document.querySelector(".cnpj")) {
    document
        .querySelectorAll(".cnpj")
        .forEach((item) =>
            Inputmask({ mask: "99.999.999/9999-99" }).mask(item)
        );
}

if (document.querySelector(".cep")) {
    document
        .querySelectorAll(".cep")
        .forEach((item) => Inputmask({ mask: "99.999-999" }).mask(item));
}

if (document.querySelector(".tel")) {
    document
        .querySelectorAll(".tel")
        .forEach((item) => Inputmask({ mask: "(99) 9999-9999" }).mask(item));
}

if (document.querySelector(".cel")) {
    document
        .querySelectorAll(".cel")
        .forEach((item) => Inputmask({ mask: "(99) 9 9999-999" }).mask(item));
}

if (document.querySelector(".ano")) {
    document
        .querySelectorAll(".ano")
        .forEach((item) => Inputmask({ mask: "9999" }).mask(item));
}

if (document.querySelector(".ramal")) {
    document
        .querySelectorAll(".ramal")
        .forEach((item) => Inputmask({ mask: "9999" }).mask(item));
}
/* Mascaras usando inputmask.js */

/* Controle de focus-out do input */
const watchFocus = document.querySelectorAll(".watchFocus");

if (watchFocus) {
    watchFocus.forEach((el) => {
        el.addEventListener("focusout", (ev) => {
            if (ev.target.value.trim() !== "") {
                ev.target.classList.add("filled");
            } else {
                ev.target.classList.remove("filled");
            }
        });
    });
}
/* Controle de focus-out do input */

/* CARROSSEIS DO SISTEMA */
if (document.querySelector(".pge-signup-inst__main__slider__carousel")) {
    new Swiper(".pge-signup-inst__main__slider__carousel", {
        slidesPerView: 1,

        pagination: {
            el: ".pge-signup-inst__main__slider__carousel__swiper-pagination",
            clickable: true,
        },
    });
}

if (document.querySelector(".pge-signup-pers__main__slider__carousel")) {
    new Swiper(".pge-signup-pers__main__slider__carousel", {
        slidesPerView: 1,

        pagination: {
            el: ".pge-signup-pers__main__slider__carousel__swiper-pagination",
            clickable: true,
        },
    });
}

const profileCard = document.querySelector('.cmp-crd-profile');
if(profileCard){
    const profileImage = profileCard.querySelector('.cmp-crd-profile__img');
    const profileButton = profileCard.querySelector('.cmp-btn-01');
    const profileInput = profileCard.querySelector('input[type=file]');


    profileButton.addEventListener('click', ()=>{
        profileInput.click();
    });

    profileInput.addEventListener('change', ()=>{
        if(profileInput.files[0]){
            console.log('tem file')
            const fileReader = new FileReader();
            fileReader.readAsDataURL(profileInput.files[0]);

            fileReader.addEventListener('load', ()=>{
                profileImage.setAttribute('src', fileReader.result);
            });

        }
    })
}
