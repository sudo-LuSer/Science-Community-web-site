function share(){	
	var arr=["Projects.." , "Proofs.." , "Exercices..","Information"];
	var index=Math.floor(Math.random()*arr.length);
	$('#share').innerHTML=arr[index];
}
setInterval(3000,share);