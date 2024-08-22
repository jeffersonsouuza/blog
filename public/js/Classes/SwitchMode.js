export default class SwitchMode {
	constructor(toggleModes, modes, currentModeKey) {
		this.toggleModes = toggleModes.map((selector, index) => ({
			element: document.querySelector(selector),
			mode: modes[index]
		}));
		this.modes = modes;
		this.currentModeKey = currentModeKey;
		this.currentMode = localStorage.getItem(currentModeKey) || modes[0];
	}
	
	switchMode(mode) {
		this.modes.forEach(style => document.body.classList.remove(style));
		
		document.body.classList.add(mode);
		
		localStorage.setItem(this.currentModeKey, mode);
	}
	
	init() {
		this.switchMode(this.currentMode);
		
		this.toggleModes.forEach(toggleMode => {
			if (toggleMode.element) {
				toggleMode.element.addEventListener('click', () => this.switchMode(toggleMode.mode));
			} else {
				console.warn(`Elemento não encontrado para o modo: ${toggleMode.mode}`);
			}
		});
	}
	
}
