<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3</title>
</head>
<body>


<form>

    <label>Enter text in buffer:</label><br>

    <textarea name="buffer" id="buffer" cols="34" rows="10"></textarea> <br>

    <input type="button" id="show" value="Show Buffer">
    <input type="button" id="add" value="Add Buffer">
    <input type="button" id="clear" value="Clear Buffer"> <br>

    <div id="output"> </div>

    <p><b>Which field do you what to sort:</b><Br>

    <input type="radio" name="sort" value="name"> Name <br>
    <input type="radio" name="sort" value="surname"> Surname <br>
    <input type="radio" name="sort" value="age"> Age<br>

    <input type="button" id="sortBy" value="Sort">

</form>

<div id="sorting"> </div>


<script>

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

    var myLib = (function() {
        var buffer = '';
        var result;

        return {
            add: function () {
                buffer += document.getElementById("buffer").value;
                buffer += " ";

                return buffer;
            },

            show: function () {
                document.getElementById('output').innerHTML = buffer;
             },

            tide: function () {
                buffer = '';
                return buffer;
             },

            sort: function () {
                var get = document.getElementsByName('sort');
                for (var i = 0; i < get.length; i++) {
                    if (get[i].checked) value = get[i].value;
                }

                result = users.sort(function (a, b) { return a[value] > b[value] ? 1 : -1;});

                for (var i = 0; i < result.length; i++) {
                        document.getElementById('sorting').innerHTML += "<div>" + "<p>" + "<span style='font-weight: bold; color: red;'>" + "Name: " + "</span>" + result[i].name + "</p>" +
                            "<p>" + "<span style='font-weight: bold; color: red;'>" + "Surname: " + "</span>" + result[i].surname + "</p>" +
                            "<p>" + "<span style='font-weight: bold; color: red;'>" + "Age: " + "</span>" + result[i].age + "</p>" + "</div>";
                    }
            }
    };
    })();

    document.getElementById("add").onclick = myLib.add;
    document.getElementById("show").onclick = myLib.show;
    document.getElementById("clear").onclick = myLib.tide;
    document.getElementById("sortBy").onclick = myLib.sort;

</script>


</body>
</html>
