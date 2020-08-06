// Сделайте функцию, которая будет генерировать случайные числа от 1 до 10.
//  Сделайте так, чтобы сгенерированное число было задержкой функции setTimeout в секундах.
//   Оберните все это в промис.
//  Пусть промис выполнится успешно, если сгенерировано число от 1 до 5, и с ошибкой - если от 6 до 10.


// function func(){
// 	let promise = new Promise((resolve,reject)=>{
// 		setTimeout(() => {
// 			let numb = Math.floor(getRandomArbitrary(1,11));
// 			console.log(numb);
// 			(numb >=1 && numb <=5) ? resolve("correct") : reject("incorrect");
// 		},1000);
// 	});
// 	return promise;
// }
// function getRandomArbitrary(min, max) {
//   return Math.random() * (max - min) + min;
// }

// func()
// 		.then(
// 			()=>{console.log("correct")},
// 			()=>{console.log("incorrect")}
// 		);



// Сделайте промис,
//  который через 5 секунд случайным образом выполнится или с успехом,
//   или с ошибкой.
//  Примените изученный метод catch для отлавливания ошибок.

/*function func(){
	let promise = new Promise((resolve,reject)=>{
		setTimeout(() => {
			let numb = Math.floor(getRandomArbitrary(1,11));
			console.log(numb);
			(numb >=1 && numb <=5) ? resolve("correct") : reject("incorrect");
		},5000);
	});
	return promise;
}
function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

func()
		.then(()=>{console.log("correct")})
		.catch(()=>{console.error("mistake");})*/

/*
Сделайте цепочку из трех промисов.
 Пусть первый промис возвращает число.
  Сделайте так, чтобы каждый последующий промис через 3 секунды возводил в квадрат результат предыдущего промиса.
   После окончания манипуляций выведите число алертом на экран.
*/

// function func(numb){
// 	let promise = new Promise((resolve,reject)=>{
// 		setTimeout(()=>{
// 			(numb) ? resolve(numb) : reject(new new Error("something went wrong"))
// 		},3000);
// 	}); 
// 	return promise;
// }
// func(2)
// 		.then((numb) => {return numb*numb})
// 		.then((numb) => {return numb*numb})
// 		.then((numb) => {console.log(numb)});

/*
Переделайте предыдущую задачу так,
 чтобы один из промисов в цепочке выполнился с ошибкой.
  В конце цепочки расположите метод catch, который поймает эту ошибку.
*/

// function func(numb){
// 	let promise = new Promise((resolve,reject)=>{
// 		setTimeout(()=>{
// 			(numb) ? resolve(numb) : reject(new Error("something went wrong"))
// 		},3000);
// 	}); 
// 	return promise;
// }
// func(0)
// 		.then((numb) => {return numb*numb},
// 				(error) => {throw error})
// 		.then((numb) => {return numb*numb})
// 		.then((numb) => {console.log(numb)})
// 		.catch((error) =>{console.error(error)});