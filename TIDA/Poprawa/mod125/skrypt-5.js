console.log("Demo-5");
let arr = [5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100];
let btn = document.querySelector('#clear');
	btn.addEventListener('click',()=>{
		console.log("Czyszczenie");
		let ol = lst.getElementsByTagName('LI');
		for(let i=0; i<arr.length; i++){
			ol[0].remove();
		}
		console.log(arr);
	});
let lst = document.querySelector('#list');
for(let i=0; i<arr.length; i++){
	let li = document.createElement('li');
	let txt = document.createElement('span');
	txt.innerHTML = arr[i];
	li.appendChild(txt);
	lst.appendChild(li);
}
