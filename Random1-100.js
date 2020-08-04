"use strict"
function newNumb(){
	let arr = new Array();
	return function(){
		let gen = Math.floor(Math.random() * 100)+1;
		for (let key of arr){
		if (gen == key)
			newNumb();
			break;
		}
		arr.push(gen);
		return arr;
	}
}

let a = newNumb();
for (let i = 0; i < 98;i++){
	a();
}
console.log(a());