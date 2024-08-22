export default class CurrenteDate {
	constructor(htmlClass) {
		this.htmlClass = document.querySelector('.'+htmlClass);
		this.data = new Date();
	}
	
	getDiaSemana() {
		const diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
		return diasSemana[this.data.getDay()];
	}
	
	getDia() {
		return this.data.getDate();
	}
	
	getMes() {
		const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
		return meses[this.data.getMonth()];
	}
	
	getAno() {
		return this.data.getFullYear();
	}
	
	getHoras() {
		return this.data.getHours();
	}
	
	getPeriodoDoDia() {
		const periodoDoDia = [
			[22, 'Trabalhando até tarde'],
			[18, 'Boa noite'],
			[12, 'Boa tarde'],
			[6,  'Bom dia'],
			[0,  'Uau, madrugador']
		];
		
		for (let i = 0; i < periodoDoDia.length; i++) {
			if (this.getHoras() >= periodoDoDia[i][0]) {
				this.htmlClass.textContent = periodoDoDia[i][1];
				break;
			}
		}
	}
	
	getDataCompleta() {
		return `${this.getDiaSemana()}, ${this.getDia()} de ${this.getMes()} de ${this.getAno()}`;
	}
	
	init() {
		this.htmlClass.textContent = this.getDataCompleta();
	}
}
