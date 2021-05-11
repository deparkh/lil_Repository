const cars=['Mazda', 'Nissan','Toyota']
const people=[
	{name:'Janusz', budget:4000},
	{name:'Solevoy', budget:-8},
	{name:'Vladimir', budget:1337228}
]
cars.push('Renault')//add to end
cars.unshift('Audi')// add to start
console.log(cars) 
console.log(cars.shift()) //Removes 1st element after calling
// const fstCar=cars.shift()
console.log(cars.pop())//Removes last element after calling
console.log(cars)
console.log(cars.reverse())
const text='Ne tot silny kto mnogo govorit, a tot kto malo molchit'
const reverseText=text.split('').reverse().join('') //Transforms $text into array
// after each letter, then reverses, then transforms
// each el of array into a string, and replaces commas
// with empty space, so it looks like we wait for it
console.log(reverseText)
const index=cars.indexOf('Nissan')
cars[index]='Porsche'
console.log(cars)
const person=people.find(function(person){
	return person.budget===-8
})
console.log(person)
for(const ebalo of people){
	console.log(ebalo)
	if (ebalo.budget===1337228) {
		findedEbalo=ebalo
		console.log(findedEbalo)
	}
}
console.log(cars.includes('Audi'))
const carsUpperCase=cars.map(car=>car.toUpperCase())
// console.log(cars.map())
const sumAll=people.reduce((acc, person)=>acc+=person.budget, 0)
console.log(sumAll)
// Filter is used when we want do display only chosen data.
// We create another array for it
// Map is used when we want to change the data
// Reduce is used when we want to work with selected data and f.e. sum it 
const sumAll2=people.filter(person=>person.budget>4000).reduce((acc, person)=>acc+=person.budget, 0)
console.log(sumAll2)

