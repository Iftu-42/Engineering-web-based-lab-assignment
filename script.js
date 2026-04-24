
function toggleForms() {
    const loginCard = document.getElementById('loginCard');
    const registerCard = document.getElementById('registerCard');

    if (loginCard.style.display === "none") {
        loginCard.style.display = "block";
        registerCard.style.display = "none";
    } else {
        loginCard.style.display = "none";
        registerCard.style.display = "block";
    }
}


function clearForm(formId) {
    document.getElementById(formId).reset();
}
