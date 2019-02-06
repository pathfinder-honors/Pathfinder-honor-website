//get data from text box
var firstName;
var lastName;
var clubName
var userId
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