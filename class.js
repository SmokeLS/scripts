class Elem{
	constructor(selector){
		this.elem.document.querySelector(selector);
	}
}



const elem = new Elem('селектор');

elem.html('!'); //запишет в текст элемента '!'
elem.append('!'); //запишет в начало элемента '!'
elem.prepend('!'); //запишет в конец элемента '!'
elem.attr('class', 'www'); //запишет в атрибут class значение www

//Должны работать цепочки методов:
elem.html('hello').append('!').prepend('!');
elem.attr('class', 'www').attr('title', 'hello');