// alert ('LOH')

// Function Declaration
function greet(name){
	console.log('Hi, ', name)
}
// greet2('Lena')
// Function Expression
const greet2=function greet2(name){
	console.log('Hi, ', name)
}
greet('Marta')
// Difference is that you can execute Declarated function
// In the any place of code, despite
// Expressed Function you can express only after
// the moment you wrote this function

// Anonimous functions
// let counter=0
// const interval=setInterval(function(){
// 	if(counter===5){
// 		clearInterval(interval)
// 	}else{
// 		counter++
// 		console.log(counter)
// 	}
// }, 1000)

// Arrow functions
const arrow=()=>{
	console.log('Arrow Function')
}
arrow()
const arrow2=name=>console.log(name)

arrow2('Robert')
const arrow3=num=>console.log(num**2)
arrow3(5)

// Default props
const arrSum=(a=1, b=2)=>console.log(a+b)
arrSum(2, 5)

// Rest operator
function sumAll(...all){
	let result=0
	for(let num of all){
		result+=num
	}
	console.log(result)
	return result
}
sumAll(3, 4, 2, 1, 5, 7)
// Closures
function createMember(name){
	return function(lastName){
		console.log(name+' '+lastName)
	}
}
const logWithLastName=createMember('Kacperek')
console.log(logWithLastName('Pedryc')) //Kacperek Pedryc
console.log(logWithLastName('Kędzior')) //Kacperek Kędzior
console.log();