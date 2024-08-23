import ToggleImageInterval from "./Classes/ToggleImageInterval.js";
import CurrenteDate from "./Classes/CurrenteDate.js";
import StateSwitcher from "./Classes/StateSwitcher.js";
import ClassSwitcher from "./Classes/ClassSwitcher.js";
import SwitchMode from "./Classes/SwitchMode.js";

let toggleImageLogin = new ToggleImageInterval(
	'loginImage',
	['login-jericoacoara.jpg', 'login-rio-de-janeiro.jpg'],
	3000
);
toggleImageLogin.init();

let periodOfTheDay = new CurrenteDate('period-of-the-day');
periodOfTheDay.getPeriodoDoDia();

let currenteDate = new CurrenteDate('current-date');
currenteDate.init();

let toggleState = new StateSwitcher(
	['.click-area'],
	['#toggleIconUser'],
	['bi-caret-down-fill'],
	['bi-caret-up-fill']
);
toggleState.init();

let toggleThemeIcon = new ClassSwitcher(
	'.toggleThemeLight, .toggleThemeDark',
	'#toggleThemeIcon',
	'activeClassTheme',
	'bi-sun-fill', 'bi-moon-stars-fill'
);
toggleThemeIcon.init();

//Alterna o tema e Salva a preferência
document.addEventListener('DOMContentLoaded', function () {
	const modeSwitcher = new SwitchMode(
		['.toggleThemeLight', '.toggleThemeDark'],
		['light-theme', 'dark-theme'],
		'theme'
	);
	modeSwitcher.init();
});
	
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

//Habilita o Loader
document.addEventListener('click', function(event) {
	const element = event.target;
	
	if (element.tagName === 'A' && !element.href.includes('#') && element.href) {
		document.querySelector('.loading').style.display = 'block';
	} else if (element.tagName === 'BUTTON' && element.type !== 'button') {
		document.querySelector('.loading').style.display = 'block';
	}
});
