export default class StateSwitcher {
	constructor(clickAreas, pathsToToggleClasses, toggleClassesOne, toggleClassesTwo) {
		this.toggleClassElements = pathsToToggleClasses.map(path => document.querySelector(path));
		this.clickAreas = clickAreas.map(area => document.querySelector(area));
		this.toggleClassesOne = toggleClassesOne;
		this.toggleClassesTwo = toggleClassesTwo;
		this.toggleClass = this.toggleClass.bind(this);
	}
	
	toggleClass(index) {
		this.toggleClassElements[index].classList.toggle(this.toggleClassesOne[index]);
		this.toggleClassElements[index].classList.toggle(this.toggleClassesTwo[index]);
	}
	
	init() {
		this.clickAreas.forEach((clickArea, index) => {
			if (clickArea && this.toggleClassElements[index] && this.toggleClassesOne[index] && this.toggleClassesTwo[index]) {
				clickArea.addEventListener('click', () => this.toggleClass(index));
			}
		});
	}
}
