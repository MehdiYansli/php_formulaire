<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
		table {
			width:10%;
			border:1px solid #456e73;
			border-collapse:separate;
			border-spacing:3px;
			padding:5px;
		}
		table th {
            font-weight: bold; 
            text-align: center;
			border:1px solid #456e73;
			padding:5px;
			background: #456e73;
			color: #fcf7f7;
		}
		table td {
			border:1px solid #456e73;
			text-align:center;
			padding:5px;
			background: #f8f7f7;
			color: #456e73;
		}
        body {
            background-color: #456e73;
            color: white;
            font-size: 2rem;
            text-align: center;
        }
	</style>
</head>
<body>
    
</body>
</html>

<?php 

 $nom = $_GET['nom'];
 $prenom = $_GET['prenom'];
 $mail = $_GET['mail'];
 $tel = $_GET['tel'];
 $adresse = $_GET['adresse'];

 $contact = [$nom, $prenom, $mail, $tel, $adresse];

 $error = false;
 foreach ($contact as $key => $value) {
        if (empty($value)) {
            $error = true;
        };
};

 if ($error) {
    echo "Vous devez remplir tous les champs !";
 } else {
    echo "<table>
    <thead>
            <tr>
                <th>Contact</th>
            </tr>
        </thead>
        <table>";

    foreach ($contact as $key => $value) {
        
        echo "<table>

		<tbody>
			<tr>
				<td>$value</td>
			</tr>
		</tbody>
	</table>";
     };
 };


//  if (empty($contact[$value])) {
   
//         echo "Vous devez remplir tous les champs !";

//     };

// if (isset($value) && !empty($value)) {

//     foreach ($contact as $key => $value) {
//         echo htmlspecialchars($value);
//      };
//     };


    


?>