export default class ClassSwitcher {
	constructor(clickAreas, toggleClassById, activeClassSwitcher, ...toggleClasses) {
		this.toggleClassById = document.querySelector(toggleClassById);
		this.clickAreas = document.querySelectorAll(clickAreas);
		this.activeClassSwitcher = activeClassSwitcher;
		this.toggleClasses = toggleClasses;
		
		this.savedClass = localStorage.getItem(activeClassSwitcher) || this.toggleClasses[0];
		
		this.applyClass(this.savedClass);
		
		this.handleClick = this.handleClick.bind(this);
	}
	
	applyClass(className) {
		this.toggleClasses.forEach(cls => {
			this.toggleClassById.classList.remove(cls);
		});
		this.toggleClassById.classList.add(className);
		localStorage.setItem(this.activeClassSwitcher, className);
	}
	
	handleClick(event) {
		this.clickAreas.forEach((area, index) => {
			if (area === event.currentTarget) {
				this.applyClass(this.toggleClasses[index]);
			}
		});
	}
	
	init() {
		if (this.clickAreas && this.toggleClassById && this.toggleClasses.length > 0) {
			this.clickAreas.forEach(area => {
				area.addEventListener('click', this.handleClick);
			});
		}
	}
}
