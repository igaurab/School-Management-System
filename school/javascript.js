//Library Form 63
var holder = 
	'<h1>Choose your Field</h1><ul class="fields">'+
	'<li onclick="createDocumentForm()">Reception</li>'+
	'<li onclick="createAccountForm()">Account</li>'+
	'<li onclick="createLibraryForm()">Library</li>'+
	'<li onclick="createGurdianForm()">Gurdians</li>'+
	'<li onclick="createTeacherForm()">Teachers</li>'+
	'<li onclick="createAdminForm()">Administrator</li></ul>';

function createAccountForm()
{
document.body.innerHTML =holder+"<h1>Log In As Accountant</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','account');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','login.php')	
document.body.appendChild(newElement);
}

function createLibraryForm()
{

document.body.innerHTML =holder+"<h1>Log In As Library Manager</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','library');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','login.php')	
document.body.appendChild(newElement);


}

function createGurdianForm()
{

document.body.innerHTML =holder+"<h1>Log In As Gurdians</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Children's Id: ";
	newChildren.setAttribute('for','id');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','id');
	newChildren.setAttribute('type','number');
	newChildren.setAttribute('name','id');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','gurdian');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','gurdian.php')	
document.body.appendChild(newElement);


	
}

function createTeacherForm()
{

	document.body.innerHTML =holder+"<h1>Log In As Teachers</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Subject Code: ";
	newChildren.setAttribute('for','subject');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','subject');
	newChildren.setAttribute('type','number');
	newChildren.setAttribute('name','subject');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','teacher');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','teacher.php')	
document.body.appendChild(newElement);



}

function createDocumentForm()
{

document.body.innerHTML =holder+"<h1>Log In As Receptionist</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','document');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','document.php')	
document.body.appendChild(newElement);
}
	

function createAdminForm()
{
document.body.innerHTML =holder+"<h1>Log In As Administrator</h1>";
var newElement = document.createElement('form');
var newChildren;
var newNode = document.createElement('p');
	
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Name :";
	newChildren.setAttribute('for','name');
	newNode.appendChild(newChildren);

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','name');
	newChildren.setAttribute('name','name');
	newChildren.setAttribute('type','text');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)

	newNode = document.createElement('p');
	newElement.appendChild(newNode);
	newChildren = document.createElement('label')
	newChildren.innerHTML = "Password : ";
	newChildren.setAttribute('for','password');
	newNode.appendChild(newChildren)

	newChildren = document.createElement('input')
	newChildren.setAttribute('id','password');
	newChildren.setAttribute('type','password');
	newChildren.setAttribute('name','password');
	newChildren.setAttribute('required','');
	newNode.appendChild(newChildren)


	newNode = document.createElement('p');
	newElement.appendChild(newNode)
	newChildren = document.createElement('label');
	newNode.appendChild(newChildren);

	anotherChildren = document.createElement('input')
	anotherChildren.setAttribute('type','submit');
	anotherChildren.setAttribute('name','admin');
	newChildren.appendChild(anotherChildren);


newElement.setAttribute('method','POST');
newElement.classList.add('form')
newElement.setAttribute('action','admin.php')	
document.body.appendChild(newElement);
}
	

