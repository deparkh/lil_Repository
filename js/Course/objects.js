// alert ('huila')

const person={
	name:'Pawel',
	age:13,
	languages:['pl', 'de'],
	greet(){
		alert('HI! My name is '+person.name)
	},
	'iNeedFreeSpa ce':'This is Space!',
}
const cars=['mazda', 'huyazda', 'pizdazda']
// OLD SYNTAX
// const name=person.name
// const age=person.age
// const languages=person.languages
// console.log(name, age, languages)

// New Syntax
const {name, age:personAge, languages, keystone='keystone'}=person
//there is no keystone in our object, it is just default value
// console.log(name, personAge, languages, keystone)

// Don't do like this :
// for(let key in person){
// 	if(person.hasOwnProperty(key)){
// 	console.log('key: ',key)
// 	console.log('value: ',person[key]) 
// 	}
// }
// Do like this:
Object.keys(person).forEach((key)=>{
	console.log(key,':',person[key])
})

// for(let car of cars){
// 	console.log(car)
// }
