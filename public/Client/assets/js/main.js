/* Mascaras usando inputmask.js */
/* ref: https://github.com/RobinHerbots/Inputmask */
if (document.querySelector(".cpf")) {
    document
        .querySelectorAll(".cpf")
        .forEach((item) => Inputmask({ mask: "999.999.999-99" }).mask(item));
}
if (document.querySelector(".rg")) {
    document
        .querySelectorAll(".rg")
        .forEach((item) => Inputmask({ mask: "99.999.999-99" }).mask(item));
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

/* PROFILE CARD */
const profileCard = document.querySelector('.cmp-crd-profile');
if(profileCard){
    // variáveis para tratamento da imagem do card
    const profileImage = profileCard.querySelector('.cmp-crd-profile__img');
    const profileButton = profileCard.querySelector('.cmp-btn-01');
    const profileInput = profileCard.querySelector('input[type=file]');



// TRATAMENTO DA IMAGEM DO CARD
    profileButton.addEventListener('click', ()=>{
        profileInput.click();
    });

    profileInput.addEventListener('change', ()=>{
        if(profileInput.files[0]){
            const fileReader = new FileReader();
            fileReader.readAsDataURL(profileInput.files[0]);

            fileReader.addEventListener('load', ()=>{
                profileImage.setAttribute('src', fileReader.result);
            });

        }
    })

    // variáveis para tratamento dos elementos de texto do card
    const nameInput = document.querySelector("input[name=name]");
    const cpfInput = document.querySelector("input[name=cpf]");
    const rgInput = document.querySelector("input[name=rg]");

    if(nameInput){
        const nameField = profileCard.querySelector(".cmp-crd-profile__name");

        if(nameInput.value != ''){
            if(nameField.style.display != 'block') {
                nameField.style.display="block";
            }

            nameField.textContent = nameInput.value;
        }

        nameInput.addEventListener("input", (ev) => {

            if(nameField.style.display != 'block') {
                nameField.style.display="block";
            }
            nameField.textContent = ev.target.value;
        })
    }
    if(cpfInput){
        const cpfField = profileCard.querySelector(".cmp-crd-profile__cpf");

        if(cpfInput.value != ''){
            if(cpfField.style.display != 'block') {
                cpfField.style.display="block";
            }

            cpfField.textContent = `CPF: ${cpfInput.value}`;
        }

        cpfInput.addEventListener("input", (ev) => {

            if(cpfField.style.display != 'block') {
                cpfField.style.display="block";
            }
            cpfField.textContent = `CPF: ${ev.target.value}`;
        })
    }
    if(rgInput){
        const rgField = profileCard.querySelector(".cmp-crd-profile__rg");

        if(rgInput.value != ''){
            if(rgField.style.display != 'block') {
                rgField.style.display="block";
            }

            rgField.textContent = `RG: ${rgInput.value}`;
        }

        rgInput.addEventListener("input", (ev) => {

            if(rgField.style.display != 'block') {
                rgField.style.display="block";
            }
            rgField.textContent = `RG: ${ev.target.value}`;
        })
    }


}


