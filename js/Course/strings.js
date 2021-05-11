// alert ('eblan')

// Backticks practice

// const name='Pavlyk'
// const role='Pidor'
// const age=18
// console.log(`My name is ${name}, I am ${age<18?'ADOPTED':'Businassman'} and I am ${role}`)
const output=`
<div>
	<h1>You have just made a DOM with JS </h1>
	<p>Even without REACT!</p>
	<ul>
		<li>It</li>
		<li>Even</li>
		<li>Have</li>
		<li>A</li>
		<li>List!</li>
	</ul>
</div>
`
function buildDom(){
	document.write(output)
}

// const string='        Bik ini       '
// console.log(string.trim())

// function logPerson(s, name, age){
// 	if(age<0){
// 		age='Not alive yet'
// 	}
// 	return `${s[0]}${name}${s[1]}${age}`
// }
// const personName='Antoha'
// const personName2='Vladik'
// const personAge=12
// const personAge2=-42
// const personOutput=logPerson`Name: ${personName}, Age: ${personAge}`
// console.log(personOutput)
// const personOutput2=logPerson`Name: ${personName2}, Age: ${personAge2}`
// console.log(personOutput2)