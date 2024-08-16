export default class ToggleClass {
	constructor(clickArea, toggleClassById, toggleClassOne, toggleClassTwo) {
		this.toggleClassById = document.querySelector(toggleClassById);
		this.clickArea = document.querySelector(clickArea);
		this.toggleClassOne = toggleClassOne;
		this.toggleClassTwo = toggleClassTwo;
		this.toggleClass = this.toggleClass.bind(this);
	}

	toggleClass() {
		this.toggleClassById.classList.toggle(this.toggleClassOne);
		this.toggleClassById.classList.toggle(this.toggleClassTwo);
	}

	init() {
		if (this.clickArea && this.toggleClassById && this.toggleClassOne && this.toggleClassTwo) {
			this.clickArea.addEventListener('click', this.toggleClass);
		}
	}
}