function digits(num){
  let array = num.toString().split("");
  let newArr = new Array();
  for (let i = 0; i < array.length;i++){
  		for(let j = i+1; j < array.length;j++){
  			 newArr.push(Number(array[i])+Number(array[j]));
  		}
  }
  return newArr;
}

console.log(digits(234));