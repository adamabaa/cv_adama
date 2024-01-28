<?php
// Démarrez la session pour accéder aux variables de session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Cv Adama BA, développeur autodidacte passionné par la création d'applications web. Compétences solides en développement front-end et back-end, ainsi qu'en gestion de bases de données. Capable de travailler de manière autonome, d'apprendre rapidement et de résoudre des problèmes de manière efficace. À la recherche d'opportunités pour développer et mettre en pratique mes compétences en tant que développeur full-stack.">
    <meta name="robots" content="index, follow">
    <meta name="color-scheme" content="dark" />
    <meta name="author" content="Adama BA">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirmation</title>
    <link rel="icon" type="image/png" href="images/resume.jpg">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cv.css">
</head>

<body>
    <div class="container">
        <h1>Message bien reçu !</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Nom</b> : <?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : ''; ?></p>
                <p class="card-text"><b>Prénom</b> : <?php echo isset($_SESSION['prenom']) ? htmlspecialchars($_SESSION['prenom']) : ''; ?></p>
                <p class="card-text"><b>Email</b> : <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo isset($_SESSION['message']) ? htmlspecialchars($_SESSION['message']) : ''; ?></p>
            </div>
        </div>
        <a class="btn btn-primary m-3 " href="index.php" role="button">Retour</a>
    </div>
</body>
</html>

<?php
// Détruisez ou videz les variables de session après utilisation
session_destroy();
?>

