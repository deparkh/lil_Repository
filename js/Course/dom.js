const loh=document.getElementById('loh')
loh.style.backgroundColor='#333'
loh.style.color='white'
loh.style.padding='2rem'
loh.style.textAlign='center'
const pidor=document.querySelector('#pidor')
pidor.style.backgroundColor='blue'
const dolbaeb=document.querySelector('.dolbaeb').children[0]
dolbaeb.style.backgroundColor='yellow'
console.log(document.querySelectorAll('h2'))
loh.onclick=()=>{
	if(loh.style.color==='white'){
		loh.style.color='red'
	}else{
		loh.style.color='white'
	}
}
pidor.addEventListener('dblclick',()=>{
	if(pidor.style.color==='black'){
		pidor.style.color='red'
	}else{
		pidor.style.color='black'
	}
})
dolbaeb.addEventListener('click',(event)=>{
	event.preventDefault()
	console.log('clicked')
})