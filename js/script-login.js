const modalElement = document.querySelector(".modal");
const modalBodyParagraph = document.querySelector(".modal-body > p");
const urlParams = new URLSearchParams(location.search);

const modal = new bootstrap.Modal(modalElement);



window.addEventListener("load", () => {
    if (urlParams.has("retorno")) {
        const retorno = urlParams.get("retorno");
        modalElement.classList.remove("invisible");
        modalBodyParagraph.textContent = retorno;
        

        modal.show();
    }
});


