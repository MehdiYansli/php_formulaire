<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-color: #456e73;
        }
        form {
            width: 15%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input {
            margin: 5px;
            height: 30px;
            width: 100%;
            font-size: 1rem;
        }

        button, #submit {
            width: 100%;
            height: 30px;
            background-color: grey;
            color: white;
            font-weight:bolder;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <form action="contact.php" method="get">
        <input type="text" placeholder="Nom" name="nom" id="nom">
        <input type="text" placeholder="Prenom" name="prenom" id="prenom">
        <input type="email" placeholder="Email" name="mail" id="mail">
        <input type="tel" placeholder="Telephone" name="tel" id="phone">
        <input type="text" placeholder="Adresse" name="adresse" id="adresse">
        <input type="submit" id="submit" value="Envoyer">
        <button type="reset">Annuler</button>
    </form>
    
</body>
</html>