<?php
define('GITHUB_PROFILE', 'https://github.com/ada97568');
define('LINKEDIN_PROFILE', 'https://www.linkedin.com/in/adamaba97/');
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

    <title>CV de Adama BA</title>
    <link rel="icon" type="image/png" href="images/resume.jpg">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="...">
    <link rel="stylesheet" href="lightbox2-2.11.4/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="css/cv.css">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" defer></script>
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/sizeTxt.js" defer></script>
    <script src="js/changeColor.js" defer></script>
    <script src="/js/gallery.js" ></script>
    <script src="js/scrollUp.js" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body>

    <div class="loader">Chargement...
        <span></span>
    </div>

    <div id="content" class="container hidden">

        <header class="text-center fixed-top p-2 bg-light w-100">
            <h1>Adama BA</h1>
            <p id="position">Développeur web Full-stack </p>
            <div class="d-flex justify-content-end">
                <i id="toggleMode" class="fas fa-adjust fs-4 text-primary cursor-pointer"
                    aria-label="Changer le mode"></i>
            </div>
        </header>

        <section class="mb-5 p-3 border border-primary mt-4">
            <h2><i class="fas fa-user"></i>Résumé professionnel</h2>
            <div class="summary row align-items-center">
                <!-- ... (contenu de la première section) -->
                <div class="col-md-3 col-sm-12 text-center mb-3">
                    <img src="images/adama.jpg" width="80px" alt="" class="img-fluid img-thumbnail">
                </div>
                <p class="content">
                    En tant que développeur web Full-stack passionné, je cherche à contribuer activement au
                    développement d'applications web innovantes. Fort de compétences approfondies en développement
                    front-end et back-end, ainsi qu'en gestion de bases de données, mon objectif est d'apporter une
                    valeur ajoutée en concevant, implémentant et optimisant des solutions robustes. Motivé par la
                    résolution de problèmes et la quête de l'excellence technique, je suis prêt à relever les défis
                    qui me permettront de continuer à apprendre et à évoluer dans le domaine du développement web.
                </p>
            </div>
        </section>

        <section class="mb-4 p-3 border border-primary d-flex flex-column">
            <h2><i class="fas fa-code"></i>Compétences techniques</h2>
            <ul id="competence" class="list-unstyled">
                <li><b>Langages de programmation :</b> HTML, CSS, JavaScript, Python</li>
                <li><b>Frameworks front-end :</b> React, Angular</li>
                <li><b>Frameworks back-end :</b> Node.js, Express</li>
                <li><b>Bases de données :</b> MySQL, MongoDB</li>
                <li><b>Outils de versionnement :</b> Git, GitHub</li>
                <li><b>Méthodologies de développement :</b> Agile</li>
                <li><b>Résolution de problèmes et débogage</b></li>
            </ul>
        </section>

        <section class="mb-4 p-3 border border-primary">
            <h2><i class="fas fa-school"></i>Formations</h2>
            <ul id="formation" class="list-unstyled">
                <li class="mb-3">
                    <b>ISEP DIAMNIADIO :</b> Développement Back-end
                </li>
                <li class="mb-3">
                    <b>HEPO DAKAR :</b> Développement Front-end
                </li>
                <li class="mb-3">
                    <b>Cours en ligne :</b> Linkedin Learning
                </li>
                <li class="mb-3">
                    <b>Cours en ligne :</b> Udacity
                </li>
                <li class="mb-3">
                    <b>Cours en ligne :</b> Alphrom
                </li>
                <li class="mb-3">
                    <b>Cours en ligne :</b> Educative
                </li>
                <li class="mb-3">
                    <b>Cours en ligne :</b> Sololearn
                </li>
            </ul>
        </section>

        <section id="projects" class="mb-5 p-3 border border-primary">
            <h2><i class="fas fa-folder-minus"></i>Projets</h2>

            <div class="project card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Portfolio personnel</h3>
                    <p class="card-text">Création d'un portfolio personnel pour présenter mes compétences et projets.
                    </p>
                    <a href="#" class="btn btn-primary">Voir le projet</a>
                </div>
            </div>

            <div class="project card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Boutique en ligne</h3>
                    <p class="card-text">Développement d'une boutique en ligne avec des fonctionnalités de panier et de
                        paiement
                        en ligne.</p>
                    <a href="#" class="btn btn-primary">Voir le projet</a>
                </div>
            </div>

            <div class="project card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Blog personnel</h3>
                    <p class="card-text">Mise en place d'un blog avec des fonctionnalités de publication et de gestion
                        des
                        commentaires.</p>
                    <a href="#" class="btn btn-primary">Voir le projet</a>
                </div>
            </div>

            <div class="project card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Système de gestion des tâches</h3>
                    <p class="card-text">Création d'une application de gestion des tâches permettant aux utilisateurs de
                        créer,
                        éditer et supprimer des tâches.</p>
                    <a href="#" class="btn btn-primary">Voir le projet</a>
                </div>
            </div>
        </section>

        <section class="mb-4 p-3 border border-primary">
            <h2><i class="fas fa-globe"></i>Langues</h2>
            <table id="langue" class="table table-striped  table-hover table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th>Langues</th>
                        <th>Niveau</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <td>Français</td>
                        <td>Maternel</td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>Intermédiaire</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="mb-4 p-3 border border-primary">
            <h2><i class="fas fa-certificate"></i>Galerie de diplômes</h2>
            <div id="photoGallery" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Le contenu sera généré dynamiquement par le script externe -->
                </div>
                <a class="carousel-control-prev" href="#photoGallery" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#photoGallery" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </a>
            </div>
        </section>

        <section id="section-contact-form" class="mb-4 p-3 border border-primary">
            <h2><i class="fas fa-envelope"></i>Contactez-moi</h2>

            <form id="contactForm" action="process-form.php" method="POST" enctype="multipart/form-data">
                <div class="messages"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="form_name" class="form-label">Prénom *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="form_lastname" class="form-label">Nom de famille *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="form_email" class="form-label">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="form_message" class="form-label">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary btn-send" value="Envoyer">
                </div>
                <div class="mb-3">
                    <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires.</p>
                </div>
            </form>
        </section>
        
        <footer class="text-center mt-5 p-3">
            <div class="container">
                <h3>Mes liens</h3>
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fab fa-github"></i><a href="<?= GITHUB_PROFILE ?>"
                            target="_blank" rel="noopener" aria-label="Profil GitHub"> Github</a>
                    </li>
                    <li class="list-inline-item"><i class="fab fa-linkedin-in"></i><a
                            href="<?= LINKEDIN_PROFILE ?>" target="_blank" rel="noopener"
                            aria-label="Profil LinkedIn"> LinkedIn</a>
                    </li>
                </ul>
                <p class="mt-3">&copy; Copyright Adama BA | 2024</p>
            </div>

            <div class="btn-group" id="txtSize" aria-label="Taille de texte">
                <button class="btn btn-secondary" data-size="0.8">A-</button>
                <button class="btn btn-secondary active" data-size="1">A</button>
                <button class="btn btn-secondary" data-size="1.2">A+</button>
            </div>
        </footer>

        <button id="scrollToTop" class="btn btn-dark m-3" aria-label="Remonter en haut de la page">
            <i class="fas fa-chevron-up">Up</i>
        </button>
    </div>

    <!-- Scripts regroupés à la fin -->
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" defer></script>
    <script src="lightbox2-2.11.4/dist/js/lightbox.min.js" defer></script>
    <script src="lightbox2-2.11.4/dist/js/lightbox-plus-jquery.min.js" defer></script>
    <!-- Vos autres scripts -->
</body>

</html>