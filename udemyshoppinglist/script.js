var button = document.getElementById("enter");
var input = document.getElementById("userinput");
var ul = document.querySelector("ul");
var listItem=document.querySelector("li").children;
var listli=document.querySelector("li");



function inputLength() {
	return input.value.length;
}

function createListElement() {
	var li = document.createElement("li");
	var values=input.value;
	li.appendChild(document.createTextNode(values));
	li.innerHTML=values+" <button class='dels'>Delete</button>";
	ul.appendChild(li);
	input.value = "";
}

ul.addEventListener("click",function(event){
	
	if(event.target.tagName ==="LI"){
		event.target.classList.toggle("done");
	
	}
	
});

ul.addEventListener("click", function(event){
	if(event.target.className==="dels"){
 event.target.parentElement.remove();

}

});

function addListAfterClick() {
	if (inputLength() > 0) {
		createListElement();
	}
}

function addListAfterKeypress(event) {
	if (inputLength() > 0 && event.keyCode === 13) {
		createListElement();
	}
}

button.addEventListener("click", addListAfterClick);

input.addEventListener("keypress", addListAfterKeypress);