<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 4</title>
</head>
<body>

<div id="output"> </div>

<form>

    <label>Name:</label><br>
    <input type="text" id="name"> <br>

    <label>Surname:</label><br>
    <input type="text" id="surname"><br>

    <label>Age:</label><br>
    <input type="text" id="age"><br><br>


    <input type="button" id="addUser" value="Accept">


</form>

<script>

    var users =[];


    document.getElementById("addUser").onclick = function(){
        var user = {};

        user.name = document.getElementById("name").value;
        user.surname = document.getElementById("surname").value;
        user.age = document.getElementById("age").value;
        users.push(user);
        document.getElementById('output').innerHTML = "<b>" + " ADD:  Name: " + "</b>" + users[users.length-1].name
            + "<b>" + " Surname: " + "</b>" + users[users.length-1].surname
            + "<b>" + " Age: " + "</b>" + users[users.length-1].age;
    };


</script>


</body>
</html>
