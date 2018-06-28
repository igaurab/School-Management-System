var _targetdiv = null;
function showdiv(id) {
    if(_targetdiv)
        _targetdiv.style.display = 'none';
    _targetdiv = document.getElementById(id);
    _targetdiv.style.display = 'block';
}

/*AJAX FUNCTIOS FOR SUBMISSION OF FORMS*/

//Borrow Book
function borrowBook(){
	var resultDiv = document.getElementById('result');
	var card = document.getElementById('displayResult');

	function postResult(value){
		resultDiv.innerHTML = value;
		resultDiv.style.display = 'block';
	}

	function clearResult(){
		resultDiv.innerHTML = '';
		resultDiv.style.display = 'none';
	}

		clearResult();

		var form = document.getElementById('borrowFormData');
		var action = form.getAttribute("action");
		var form_data = new FormData(form);

		var xhr = new XMLHttpRequest();
		xhr.open('POST',action,true);
		//xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

		xhr.onreadystatechange = function () {
			if(xhr.readyState == 4 && xhr.status == 200){
				var result = xhr.responseText;
				console.log('Result: ' + result);
				postResult(result);
			}
		};
		xhr.send(form_data);
	
	var button = document.getElementById("borrowSubmit");
}

//For Returning Book
function returnBook(){
	var resultDiv = document.getElementById('result');

	function postResult(value){
		resultDiv.innerHTML = value;
		resultDiv.style.display = 'block';
	}

	function clearResult(){
		resultDiv.innerHTML = '';
		resultDiv.style.display = 'none';
	}

		clearResult();

		var form = document.getElementById('returnFormData');
		var action = form.getAttribute("action");
		var form_data = new FormData(form);

		var xhr = new XMLHttpRequest();
		xhr.open('POST',action,true);
		//xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

		xhr.onreadystatechange = function () {
			if(xhr.readyState == 4 && xhr.status == 200){
				var result = xhr.responseText;
				console.log('Result: ' + result);
				postResult(result);
			}
		};
		xhr.send(form_data);
	
	var button = document.getElementById("returnSubmit");
}

/*Search Student*/
function searchStudent(){
	var resultDiv = document.getElementById('result');

	function postResult(value){
		resultDiv.innerHTML = value;
		resultDiv.style.display = 'block';
	}

	function clearResult(){
		resultDiv.innerHTML = '';
		resultDiv.style.display = 'none';
	}

		clearResult();

		var form = document.getElementById('searchFormData');
		var action = form.getAttribute("action");
		var form_data = new FormData(form);

		var xhr = new XMLHttpRequest();
		xhr.open('POST',action,true);
		//xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

		xhr.onreadystatechange = function () {
			if(xhr.readyState == 4 && xhr.status == 200){
				var result = xhr.responseText;
				console.log('Result: ' + result);
				postResult(result);
			}
		};
		xhr.send(form_data);
	
	var button = document.getElementById("searchSubmit");
}