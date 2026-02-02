// JavaScript Document

var addBtn = document.getElementById('addToList'); //input
var elList = document.getElementById('list'); //output
var item = document.getElementById('itemName'); //user input

var count = document.getElementById('counter');

function addItem(){
	var newEl, newElText, sum;
	
	if (item.value == 0){
		return false;
	}
	else{
		newEl = document.createElement('div');
		newElText = document.createTextNode(item.value);
		newEl.appendChild(newElText); //text inside the new div
		newEl.classList.add('alert'); //attributes for new element
		newEl.classList.add('alert-info'); //more attributes
		elList.appendChild(newEl); //add new element to parent
		
		
		item.value = '';   //clears new item box after each input
		//update counter
		sum = elList.getElementsByClassName('alert').length;
		count.textContent = sum;
		
		newEl.addEventListener('click', function(){
			elList.removeChild(newEl);
			//update counter
			sum = elList.getElementsByClassName('alert').length;
			count.textContent = sum;
		})
	}
}


addBtn.addEventListener('click', addItem, false);