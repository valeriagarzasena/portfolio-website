// JavaScript Document

//first name
var elFnGroup = document.getElementById('fnGroup'); //class box
var elFirstName = document.getElementById('firstName'); //item box
var elFnMsg = document.getElementById('fnFeedback'); //feedback message
//last name
var elLastGroup = document.getElementById('lnGroup');
var elLastName = document.getElementById('lastName');
var elLastMsg = document.getElementById('lnFeedback');
//function to check input for first and last name
function names(minLength, elId, msg, elGroup, elNext)
{
	//validation part of names
	var regex = /^[A-Za-z'-]+$/;
	var nameValue = elId.value.trim();
	
	if(nameValue.length === 0){
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		msg.innerHTML = 'This field cannot be empty.';
		return;
	}
	
	if (elId.value.length < minLength)
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Must be at least ' + minLength +' characters.';
			return;
		}
	if (!regex.test(nameValue))
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Letters only. Hyphens and apostrophes allowed.';
			return;
		}
	msg.innerHTML = '';
	elGroup.classList.remove('has-error');
	elGroup.classList.add('has-success');
	msg.innerHTML = 'Good job! ';
	disableInput(elId.id);
	enableElement(elNext.id);
}

//function to enable elements
function enableElement(div){
	var nextEl = document.getElementById(div);
	nextEl.classList.remove('hide');
}
//function to disable element
function disableInput(div){
	var currentInput = document.getElementById(div);
	currentInput.disabled = true;
}

//email
var elEmailGroup = document.getElementById('emailGroup');
var elEmail = document.getElementById('email');
var elEmailMsg = document.getElementById('emailFeedback');

//function for email
function email(minLength, elId, msg, elGroup, elNext)
{
	//validation part of names
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var nameValue = elId.value.trim();
	
	if(nameValue.length === 0){
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		msg.innerHTML = 'This field cannot be empty.';
		return;
	}
	
	if (elId.value.length < minLength)
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Must be at least ' + minLength +' characters.';
			return;
		}
	if (!validRegex.test(nameValue))
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Enter a valid email address.';
			return;
		}
	msg.innerHTML = '';
	elGroup.classList.remove('has-error');
	elGroup.classList.add('has-success');
	msg.innerHTML = 'Good job! ';
	disableInput(elId.id);
	enableElement(elNext.id);
}

//phone number
var elPhoneGroup = document.getElementById('phoneGroup');
var elPhone = document.getElementById('phone');
var elPhoneMsg = document.getElementById('phoneMsg');

//function to check phone number
function phone(elId, msg, elGroup, elNext)
{
	//validation part of phone
	var regex = /^\d{10}$/;
	var phoneValue = elId.value.trim();
	
	if(phoneValue.length === 0){
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		msg.innerHTML = 'This field cannot be empty.';
		return;
	}
	
	if (!regex.test(phoneValue))
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Must be exactly 10 digits: numbers only, no hyphens or parentheses';
			return;
		}
	msg.innerHTML = '';
	elGroup.classList.remove('has-error');
	elGroup.classList.add('has-success');
	msg.innerHTML = 'Good job! ';
	disableInput(elId.id);
	enableElement(elNext.id);
}

//username
var elUserGroup = document.getElementById('userGroup');
var elUsername = document.getElementById('username');
var elUserMsg = document.getElementById('userMsg');
//pasword
var elPwdGroup = document.getElementById('pwdGroup');
var elPwd = document.getElementById('password');
var elPwdMsg = document.getElementById('pwdMsg');

//function for username and password
function checkInput(minLength, elId, msg, elGroup, elNext)
{
	//validation part of names
	var nameValue = elId.value.trim();
	
	if(nameValue.length === 0){
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		msg.innerHTML = 'This field cannot be empty.';
		return;
	}
	
	if (elId.value.length < minLength)
		{
			elGroup.classList.add('has-error');
			elGroup.classList.remove('has-success');
			msg.innerHTML = 'Must be at least ' + minLength +' characters.';
			return;
		}
	msg.innerHTML = '';
	elGroup.classList.remove('has-error');
	elGroup.classList.add('has-success');
	msg.innerHTML = 'Good job! ';
	disableInput(elId.id);
	enableElement(elNext.id);
}

var elCommentGroup = document.getElementById('commentGroup');
var elComment = document.getElementById('comment');
var elCommentMsg = document.getElementById('commentMsg');

//function for messages
function message(elId, msg, elGroup)
{
	//validation part of names
	var nameValue = elId.value.trim();
	
	if(nameValue.length === 0){
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		msg.innerHTML = 'This field cannot be empty.';
		return;
	}
	
	msg.innerHTML = '';
	elGroup.classList.remove('has-error');
	elGroup.classList.add('has-success');
	msg.innerHTML = 'Good job! ';
	disableInput(elId.id);
}


elFirstName.addEventListener('blur', function() {
	names(2, elFirstName, elFnMsg, elFnGroup, elLastGroup);
}, false);
elLastName.addEventListener('blur', function() {
	names(2, elLastName, elLastMsg, elLastGroup, elEmailGroup);
}, false);

elEmail.addEventListener('blur', function() {
	email(2, elEmail, elEmailMsg, elEmailGroup, elPhoneGroup);
}, false);

elPhone.addEventListener('blur', function() {
	phone(elPhone, elPhoneMsg, elPhoneGroup, elUserGroup);
}, false);

elUsername.addEventListener('blur', function() {
	checkInput(4, elUsername, elUserMsg, elUserGroup, elPwdGroup);
}, false);

elPwd.addEventListener('blur', function() {
	checkInput(8, elPwd, elPwdMsg, elPwdGroup, elCommentGroup);}, false);

elComment.addEventListener('blur', function() {
	message(elComment, elCommentMsg, elCommentGroup);
}, false);
	
	


