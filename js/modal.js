export const Modal = {
    modalWrapper: document.querySelector(".modal-wrapper"),
    modalCancelButton: 
    document.querySelector(".modal-wrapper .modal-container .modal-buttons button#cancel-button"),
    modalMessage: 
    document.querySelector(".modal-wrapper .modal-content p.modal-message"),

    init() {
        this.modalMessage.textContent = "Modal";
        this.modalCancelButton.addEventListener("click", this.close.bind(this));
        this.modalWrapper.addEventListener("click", e => {
            if (e.target.className === "modal-wrapper open") {
                this.close();
            };
        })
    },

    open() {
        this.modalWrapper.classList.add("open");

    },

    close() {
        this.modalWrapper.classList.remove("open");
       

    },

    updateModalMessageText(text) {
        this.modalMessage.textContent = text;
    }
}



Modal.init();