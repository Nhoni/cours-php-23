<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="signup.php" method="post">
            <fieldset>
                <legend>Inscription</legend>
                <input type="text" name="name" placeholder="Nhoni" required>
            </fieldset>
            <fieldset>
                <legend>Votre âge</legend>
                <input type="number" name="age" placeholder="21" required>
            </fieldset>
            <fieldset>
                <legend>Votre 1er dépôt</legend>
                <input type="number" name="amount" placeholder="2023.24" required>
            </fieldset>
            <input type="submit" value="S'inscrire">
        </form>
    </main>
</body>

</html>