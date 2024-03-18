!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <meta name="description" content="Plat forme d'enregistrement de document personnel perdu.">
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/asset/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/asset/css/index.css">
</head>

<body >
<form action="{{route('traitement')}}" method="POST">
    @csrf 

    <label for="nom">Nom :</label>
    <input type="text" id="nom" placeholder="Entrer votre nom" name="name" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="surname" placeholder="Entrer votre prenom" required><br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" placeholder="Entrer votre ville" required><br>

    <label for="contact">Contact :</label>
    <input type="text" id="contact" name="contact" placeholder="Entrer votre contact" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" placeholder="Entrer votre " required><br>

    <input type="submit" value="Soumettre">
</form>
