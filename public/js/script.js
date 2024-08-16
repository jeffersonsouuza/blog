import AlternaImagens from "./Classes/AlternaImagens.js";
import PeriodoDoDia from "./Classes/PeriodoDoDia.js";
import DataAtual from "./Classes/DataAtual.js";
import ToggleClass from "./Classes/ToggleClass.js";

let alternaImagemLogin = new AlternaImagens('imagemLogin', ['login-jericoacoara.jpg', 'login-rio-de-janeiro.jpg'], 3000);
alternaImagemLogin.init();

let periodoDoDia = new PeriodoDoDia('periodo-do-dia');
periodoDoDia.init();

let dataAtual = new DataAtual('data-atual');
dataAtual.init();

let toggleClass = new ToggleClass('.area-click', '#toggleIconUser', 'bi-arrow-down-short', 'bi-arrow-up-short');
toggleClass.init();

let toggleClassNavUser = new ToggleClass('.area-click-nav', '#toggle-class-nav', 'bi-arrow-down-short', 'bi-arrow-up-short');
toggleClassNavUser.init();
	
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
