


const search = () =>{
	
	
	const searchbox = document.getElementById("search-item").value.toUpperCase();
	
	const storeitems = document.getElementById("product-list")
	
	const product = document.querySelectorAll(".product")
	
	const pname = document.getElementsByTagName("h1")
	
	
	
	for( var i=0; i<pname.length; i++){
	

let match = product[i].getElementsByTagName('h1')[0];

if(match){
	
let textvalue =	match.textContent  || match.innerHTML
	
	
	
	if(textvalue.toUpperCase().indexOf(searchbox) > -1){
		
		product[i].style.display = "";
		
	}//ifinner
	else{
		
		product[i].style.display = "none";
		
	}//else
	
}//ifouter
		
	}//forloop
	
	
}//functionsearch