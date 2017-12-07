<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example 4</title>
</head>
<body>

<div id="output"> </div>

<form>

    <label>Name:</label><br>
    <input type="text" name="name" id="name"> <br>

    <label>Surname:</label><br>
    <input type="text" name="surname" id="surname"><br>

    <label>Age:</label><br>
    <input type="text" name="age" id="age"><br><br>


    <input type="button" value="Accept" name="accept"  OnClick="go();">
    <input type="button" value="Print" name="accept"  OnClick="print(users);">

</form>

<script>

    var users =[];

    users.push(addUser());

    function addUser() {
        var user = {};

        user.name = document.getElementById('name');
        user.surname = document.getElementById('surname');
        user.age = document.getElementById('age');
        return user;

    }

    function go() {
        users.push(addUser());
    }

    function print(users) {

document.getElementById('output').innerHTML = "<b>" + "Name: " + "</b>" + users[0].name
    + "<b>" + " Surname: " + "</b>" + users[0].surname
    + "<b>" + " Age: " + "</b>" + users[0].age;
    }


</script>


</body>
</html>
