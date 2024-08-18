import ToggleImageInterval from "./Classes/ToggleImageInterval.js";
import PeriodOfTheDay from "./Classes/PeriodOfTheDay.js";
import CurrenteDate from "./Classes/CurrenteDate.js";
import ToggleClass from "./Classes/ToggleClass.js";

let toggleImageLogin = new ToggleImageInterval('loginImage', ['login-jericoacoara.jpg', 'login-rio-de-janeiro.jpg'], 3000);
toggleImageLogin.init();

let periodOfTheDay = new PeriodOfTheDay('period-of-the-day');
periodOfTheDay.init();

let currenteDate = new CurrenteDate('current-date');
currenteDate.init();

let toggleClass = new ToggleClass('.click-area', '#toggleIconUser', 'bi-arrow-down-short', 'bi-arrow-up-short');
toggleClass.init();

let toggleClassNavUser = new ToggleClass('.click-area-nav', '#toggle-class-nav', 'bi-arrow-down-short', 'bi-arrow-up-short');
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
