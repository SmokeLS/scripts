function descendingOrder(n){
  let array = n.toString().split("");
  for (let i = 0; i < array.length;i++){
    array[i]= Number(array[i]);
  }
  array.sort(function(a, b) {
    return b-a;
  });
  return Number(array.join(""));
}