import AlternaImagens from "./Classes/AlternaImagens.js";

let alternaImagemLogin = new AlternaImagens('imagemLogin', ['login-jericoacoara.jpg', 'login-rio-de-janeiro.jpg'], 3000);
alternaImagemLogin.init();
	
// Habilita o `Bootstrap Tooltip`
[].slice
.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})
