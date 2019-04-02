// --Quiz Form-- 

//get data from text box
var firstName;
var lastName;
var clubName;
var userId;
function getdata() {
 firstName = (document.getElementById('idfirstName').value);
lastName = (document.getElementById('idlastName').value);
 clubName = (document.getElementById('idclubName').value);
userId = (document.getElementById('userId').value);
}
//var clubName = 'Eau Claire Critters';
//var name = 'Josh Simmons';
function writeUserData() {
    console.log(firstName, lastName, clubName, userId);
  firebase.database().ref().child('user').push({
    firstName : firstName,
    lastName: lastName,
    clubName: clubName,
    userId: userId
  });
}
function timer() {
setTimeout(newpage,3000);
}
function newpage() {
window.open("page1.html","_top");
}

function name() {
name = (document.getElementById('idfirstName').value);
document.getElementById('learn').innerHtml = name
}

// --Signup Form--

//get data from text box
var firstName2;
var lastName2;
var Email2
function getdata2() {
 firstName = (document.getElementById('idfirstName2').value);
lastName = (document.getElementById('idlastName2').value);
 Email = (document.getElementById('idEmail2').value);
}
//var clubName = 'Eau Claire Critters';
//var name = 'Josh Simmons';
function writeUserData2() {
    //console.log(firstName2, lastName2, Email2);
  firebase.database().ref().child('teachers').push({
    firstName2 : firstName,
    lastName2: lastName,
    Email2: Email,
  });
}
function timer2() {
setTimeout(newpage2,3000);
}
function newpage2() {
window.open("index.html","_top");
}