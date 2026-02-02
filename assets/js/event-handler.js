// JavaScript Document
var elMsg = document.getElementById('msgFeedback');
var elMsg2 = document.getElementById('pwdFeedback');

var elUsername = document.getElementById('username');
var elPwd = document.getElementById('password');
var elunGroup = document.getElementById('unGroup');
var elunGroup1 = document.getElementById('unGroup1');

function checkInput(minLength, elId, msg, elGroup)
{
	if (elId.value.length < minLength)
		{
			elGroup.classList.add('has-error');
			msg.innerHTML = 'Error: The '+elId.id+' must be '+minLength+' characters or more';
		}
	else
		{
			msg.innerHTML = '';
			elGroup.classList.remove('has-error');
			elGroup.classList.add('has-success');
		}
}

elUsername.addEventListener('blur', function() {
	checkInput(4, elUsername, elMsg, elunGroup);
}, false);

elPwd.addEventListener('blur', function() {
	checkInput(8, elPwd, elMsg2, elunGroup1);
}, false);
