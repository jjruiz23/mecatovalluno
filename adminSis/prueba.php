<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Reset Form Using JavaScript</title>
<script>
function resetForm() {
    document.getElementById("myForm").reset();
}
</script>
</head>
<body>
    <form action="/examples/html/action.php" method="post" id="myForm">
        <label>First Name:</label>
        <input type="text" name="first-name">
        <input type="submit" value="Submit">
    </form>
    <br>
    <button type="button" onclick="resetForm();">Custom Reset Button</button>
</body>
</html> 