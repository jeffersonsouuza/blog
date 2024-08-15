import AlternaImagens from "./Classes/AlternaImagens.js";

let alternaImagemLogin = new AlternaImagens('imagemLogin', ['login-jericoacoara.jpg', 'login-rio-de-janeiro.jpg'], 3000);
alternaImagemLogin.init();
	
// Habilita o `Bootstrap Tooltip`
[].slice
.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Habilita o `Bootstrap Validation`.
Array.prototype.slice.call(document.querySelectorAll('.needs-validation'))
	.forEach(function (form) {
		form.addEventListener('submit', function (event) {
			if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
			}
			
			form.classList.add('was-validated')
		}, false)
	});
