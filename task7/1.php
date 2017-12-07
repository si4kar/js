<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1</title>
</head>
<body>


<form>

    <label>Enter text in buffer:</label><br>
    <textarea name="buffer" id="buffer" cols="34" rows="10"></textarea> <br>

    <input type="button" id="show" value="Show Buffer">
    <input type="button" id="add" value="Add Buffer">
    <input type="button" id="clear" value="Clear Buffer"> <br>

</form>

<div id="output"> </div>

<script>

    var buffer = makeBuffer();

        function makeBuffer() {
        var buffer = '';

        document.getElementById("add").onclick = function() {

            buffer += document.getElementById("buffer").value;
            buffer += " ";
            return buffer;
        };

        document.getElementById("show").onclick = function() {

            document.getElementById('output').innerHTML =  buffer;

        };

        document.getElementById("clear").onclick = function() {
            buffer = '';
            return buffer;
        };

    }


</script>


</body>
</html>
