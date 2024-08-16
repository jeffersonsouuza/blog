export default class PeriodoDoDia {
	constructor(htmlClass) {
		this.htmlClass = document.querySelector('.'+htmlClass);
		this.data = [
			[22, 'Trabalhando até tarde'],
			[18, 'Boa noite'],
			[12, 'Boa tarde'],
			[6,  'Bom dia'],
			[0,  'Uau, madrugador']
		];
		this.hr = new Date().getHours();
	}
	
	init() {
		for (let i = 0; i < this.data.length; i++) {
			if (this.hr >= this.data[i][0]) {
				this.htmlClass.textContent = this.data[i][1];
				break;
			}
		}
	}
	
}