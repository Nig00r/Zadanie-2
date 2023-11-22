<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor Jabłoński">
    <title>Zadanie 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
    <h2>Formularz logowania</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo" required>
        <br>
        <input type="submit" value="Zaloguj">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $poprawnyLogin = "admin";
    $poprawneHaslo = "test";

    $wprowadzonyLogin = $_POST["login"];
    $wprowadzoneHaslo = $_POST["haslo"];

    if ($wprowadzonyLogin == $poprawnyLogin && $wprowadzoneHaslo == $poprawneHaslo) {
        echo "Zalogowano pomyślnie!";
    } else {
        echo "Błąd logowania. Spróbuj ponownie.";
    }
}
?>

</body>
</html>