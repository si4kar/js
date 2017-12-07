<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>
<body>

<div id="output"> </div>

<form>

      <p><b>Which field do you what to sort:</b><Br>

        <input type="radio" name="sort" value="name"> Name <br>
        <input type="radio" name="sort" value="surname"> Surname <br>
        <input type="radio" name="sort" value="age"> Age<br>


        <input type="button" id="sortBy" value="Sort">

</form>

<div id="sorting"></div>

<script>

    var value;
    var users = [{
        name: "Вася",
        surname: 'Иванов',
        age: 20
    }, {
        name: "Петя",
        surname: 'Чапаев',
        age: 25
    }, {
        name: "Маша",
        surname: 'Медведева',
        age: 18
    }];


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