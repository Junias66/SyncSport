<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation du compte</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .message {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Un e-mail a été envoyé à votre adresse pour activer votre compte.</h1>
        <p>Veuillez vérifier votre boîte de réception (et votre dossier spam) pour le lien d'activation.</p>
    </div> 
</body>
<script>
    // Empêche l'utilisateur de revenir à la page précédente
    if (history.length > 1) {
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1); // Empêche le retour en arrière
        };
    }
</script>
</html>
