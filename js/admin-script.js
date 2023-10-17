const categoryName = document.getElementById("categoryName");
const userId = document.getElementById("userId");
const objectId = document.getElementById("objectId");
const addCategoryBtn = document.getElementById("addCategory");
const deleteUserBtn = document.getElementById("deleteUser");
const markReturned = document.getElementById("markReturned");
 

addCategoryBtn.addEventListener("click", () => {
    var categoryNameValue = categoryName.value;
    // Lógica para adicionar a categoria (pode ser implementada no backend)
    alert("Categoria adicionada: " + categoryNameValue);
});

deleteUserBtn.addEventListener("click", () => {
    var userIdValue = userId.value;
    // Lógica para excluir o usuário (pode ser implementada no backend)
    alert("Usuário excluído com sucesso. ID: " + userIdValue);
});

markReturned.addEventListener("click", () => {
    var objectIdValue = objectId.value;
    // Lógica para marcar o objeto como devolvido (pode ser implementada no backend)
    alert("Objeto marcado como devolvido. ID: " + objectIdValue);
});