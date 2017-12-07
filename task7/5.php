<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 5</title>
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
    <input type="button" id="print" value="Print">

    <p><b>Which field do you what to sort:</b><Br>

    <input type="radio" name="sort" value="name"> Name <br>
    <input type="radio" name="sort" value="surname"> Surname <br>
    <input type="radio" name="sort" value="age"> Age<br>


    <input type="button" id="sortBy" value="Sort">

</form>

<div id="sorting"></div>

<script>

    var value;
    var users =[];

    function addUser() {
        var user = {};

        user.name = document.getElementById("name").value;
        user.surname = document.getElementById("surname").value;
        user.age = document.getElementById("age").value;

        return user;

    }

    document.getElementById("addUser").onclick = function() {
         users.push(addUser());

         return users;
    };

    document.getElementById("print").onclick = function() {
        document.getElementById('output').innerHTML = "<b>" + "Name: " + "</b>" + users[users.length-1].name
            + "<b>" + " Surname: " + "</b>" + users[users.length-1].surname
            + "<b>" + " Age: " + "</b>" + users[users.length-1].age;
    };

    document.getElementById("sortBy").onclick = function() {
        var get = document.getElementsByName('sort');
        for (var i = 0; i < get.length; i++) {
            if (get[i].checked) {
                value = get[i].value;
                sort(value);
            }
        }
    };

    function sort(value) {
        result = users.sort(function (a, b) { return a[value] > b[value] ? 1 : -1;});

        for (var i = 0; i < result.length; i++) {
            document.getElementById('sorting').innerHTML += "<div>" + "<p>" + "<span style='font-weight: bold; color: red;'>" + "Name: " + "</span>" +  result[i].name + "</p>" +
                "<p>" + "<span style='font-weight: bold; color: red;'>" + "Surname: " + "</span>" + result[i].surname + "</p>" +
                "<p>" + "<span style='font-weight: bold; color: red;'>" + "Age: " + "</span>" + result[i].age + "</p>" + "</div>";
        }
    }

</script>

</body>
</html>