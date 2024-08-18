export default class ToggleImageInterval {
	constructor(classImage, arrayImagens, timeInterval) {
		this.classImage = document.querySelector('.' + classImage);
		this.arrayImagens = arrayImagens;
		this.timeInterval = timeInterval;
		this.index = 1;
		this.toggleImage = this.toggleImage.bind(this);
	}
	
	toggleImage() {
		let imageSrcDefault = this.classImage.src.substring(0, this.classImage.src.lastIndexOf('/') + 1);
		this.classImage.src = imageSrcDefault + this.arrayImagens[this.index];
		this.index++;
		if (this.index >= this.arrayImagens.length) { this.index = 0 }
	}
	
	init() {
		if (this.classImage && this.arrayImagens && this.index) {
			setInterval(this.toggleImage, this.timeInterval);
		}
		return this;
	}
}
