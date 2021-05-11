// alert ('norm pricha')

// Event loop

// const timeout=setTimeout(()=>{
// 	console.log('1 Sec timeout')
// }, 1000);
// clearTimeout(timeout)
let wait=1200
const delay=()=>{
	const promise=new Promise((resolve, reject)=>{
		setTimeout(()=>{
		// resolve()
		resolve('kto prochital tot zdohnet')
		}, wait)
	})
	return promise
}
// delay(wait=1500)
// 	.then(res=>{
// 		console.log(String(wait/1000),res)
// 	})
// 	.catch(err=>console.error('Error: ',err))

// Async functions
async function asyncExample(){
	try{
		await delay(wait=1000)
		console.log('It works!')
	} catch(e){
		console.error(e)
	} finally{
		console.log('Finally')
	}
}
asyncExample()


const nasvay=40
const prapramis=()=>{
	const pramis=new Promise((res, rej)=>{
	if(nasvay<50){
		res()
	} else{
		rej()
	}
})
return pramis
}

prapramis().then(nice=>console.log('nigce')).catch(bad=>console.error('bad'))