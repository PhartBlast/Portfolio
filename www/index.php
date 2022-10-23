<?php include 'C:\UwAmp\www\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/hero.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Mathieu Brignon.</span>
                    Un étudiant Gaming Campus de Lyon.
                </h1>
                <p>
                    Je suis passionné par le jeu vidéo mais surtout par les événements organisés autour.
                    Voici mon portfolio où vous pouvez retrouver mes créations professionnelles.
                </p>
                <div class="btn-con">
                    <a download="CV Mathieu Brignon" href="img/CV Mathieu Brignon.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>A propos de <span>moi</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Mes informations</h4>
                    <p>
                        Je suis un étudiant du Gaming Campus depuis 2 ans. <br /> <br /> Ma formation actuelle me conduit à réaliser chaque semaine un nouveau projet professionnel. En effet j'ai eu l'occasion de réaliser + de 30 projets durant mes 2 années scolaires.
                    </p>
                    <div class="btn-con">
                        <a download="CV Mathieu Brignon" href="img/CV Mathieu Brignon.pdf" class="main-btn" type="application/octet-stream">
                            <span class="btn-text">Télécharger mon CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">30+</p>
                            <p class="small-text">Projets <br /> Réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3+</p>
                            <p class="small-text">Année <br /> d'experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">6 mois</p>
                            <p class="small-text">Stage <br /> entreprise</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">80+</p>
                            <p class="small-text">Professionnels <br /> rencontrés</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">MARKETING</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="marketing"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">HMTL</p>
                        <div class="progress-con">
                            <p class="prog-text">20%</p>
                            <div class="progress">
                                <span class="HTML"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">E-Commerce</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="e-commerce"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">PHP</p>
                        <div class="progress-con">
                            <p class="prog-text">15%</p>
                            <div class="progress">
                                <span class="php"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Monetisation</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="monetisation"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Management</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="management"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon parcourt
            </h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <p class="tl-duration">2022 - Aujourd'hui</p>
                    <h5>Etudiant <span> - Gaming Campus</span></h5>
                    <p>
                        3 ème année décisive pour mon prochain diplome bachelor en marketing des jeux vidéo
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 Juin-Aout </p>
                    <h5>Stagiaire<span> - UrbanHub</span></h5>
                    <p>
                        2 mois de stage réalisés en entreprise, en tant que designer pour concevoir la version de l'app V1
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <p class="tl-duration">2021</p>
                    <h5>Etudiant<span> -Gaming Campus</span></h5>
                    <p>
                        2 eme année vers le diplome bachelor en marketing des jeux vidéo
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 Juin-Aout</p>
                    <h5>Stagiaire<span> - Ubisoft Annecy</span></h5>
                    <p>
                        2 mois de stage réaisés en entreprise, dans la cellule marketing pour le lancement du jeu Riders Republic 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <p class="tl-duration">2020</p>
                    <h5>Etudiant<span> - Gaming campus</span></h5>
                    <p>
                        1 ère année vers le diplome bachelor en marketing des jeux vidéo
                    </p>
                    </div>
                     <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <p class="tl-duration">2020</p>
                    <h5>Etudiant<span> - Lycée</span></h5>
                    <p>
                        Obtention de mon bac scientifique
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mes<span> Projets</span></h2>
            </div>
            <h2 class="port-text">
            Voici ici mon espace dédiée à l'ensemble des projets que j'ai pu réaliser durant mes études notamment au gaming campus
            </h2>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="Nicolas">
                    </div>
                    <div class="hover-items">
                        <h3>Projet Nicolas</h3>
                        <div class="icons">
                            <a href="https://www.nicolas.com/fr" target="_blank"class="icon">
                            <i class="fas fa-wine-glass-alt"></i>
                            </a>
                            <a href="https://docs.google.com/presentation/d/1b60uGUjULN5XESJfT2-2OBDcHnS_4ZJjNILVPImKT20/edit" target="_blank" class="icon">
                                <i class="fab fa-google-drive"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="PROPAGATION">
                    </div>
                    <div class="hover-items">
                        <h3>Projet Propagation VR</h3>
                        <div class="icons">
                            <a href="https://store.steampowered.com/app/1363430/Propagation_VR/" target="_blank" class="icon">
                                <i class="fab fa-steam"></i>
                            </a>
                            <a href="https://docs.google.com/document/d/1e4tOtgi6f19jrPNzbqp7VOY73XeHClxuYEQRwENYdAg/edit" target="_blank" class="icon">
                                <i class="fab fa-google-drive"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.png" alt="BOARDGAME">
                    </div>
                    <div class="hover-items">
                        <h3>Projet Boardgame</h3>
                        <div class="icons">
                            <a href="https://docs.google.com/document/d/1IweV_sC9SpVE8HDgf0-QH9jA34zTo2X5cAdQ0jhAZPk/edit" target="_blank" class="icon">
                                <i class="fab fa-google-drive"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="PITCH">
                    </div>
                    <div class="hover-items">
                        <h3>Projet Pitch</h3>
                        <div class="icons">
                            <a href="https://docs.google.com/presentation/d/18pSY0X636Lxn9anPb2gNH02epqPvnQBvYdNrzvibJLk/edit"target="_blank" class="icon">
                                <i class="fab fa-google-drive"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.png" alt="UXUI">
                    </div>
                    <div class="hover-items">
                        <h3>Projet UX/UI</h3>
                        <div class="icons">
                            <a href="https://docs.google.com/document/d/1gIMFFGWQt7ZpZGdexDOOM_904KVEttEewOFEYZfbVN4/edit" target="_blank" class="icon">
                                <i class="fab fa-google-drive"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/urbanhub.jpg" alt="urbanhub">
                    </div>
                    <div class="hover-items">
                        <h3>Projet Urbanhub</h3>
                        <div class="icons">
                            <a href="https://urban-hub.fr/" target="_blank" class="icon">
                                <i class="fas fa-skating"></i>
                            </a>
                        </div>
                    </div>
                </div>
              
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes<span> Passions</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="spike">
                        <div class="port-text">
                            <h2>
                                Brawlstar
                            </h2> 
                            <p>
                                Je prends régulièrement du temps pour jouer à Brawlstar avec mes amis.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="macronfoot">
                        <div class="port-text">
                            <h2>
                                Football
                            </h2>
                            <p>
                                Je suis un passionné de foot depuis très jeune. Pour certains grands matchs je me rends au stade de Lyon.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="pecherequin">
                        <div class="port-text">
                            <h2>
                                Pêche
                            </h2>
                            <p>
                               Pêcher en mer ou en eau douce sont mes vocations. Chaque week-end je me rends à l'étang avec mes collègues pour faire une session pêche.
                                
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="Napoleon">
                        <div class="port-text">
                            <h2>
                               Histoire
                            </h2>
                            <p>
                                Je suis transporté par l'histoire et son déroulement. Je suis friant d'anectotes historiques à partager en soirée.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/f1.png" alt="f1">
                        <div class="port-text">
                            <h2>
                                Formule 1
                            </h2>
                            <p>
                                J'ai eu la chance de participer au grand prix Paul Ricart. Depuis je suis pris chaque week-end de gp devant ma télé.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/image9.png" alt="barbrenoire">
                        <div class="port-text">
                            <h2>
                             Manga
                            </h2>
                            <p>
                            La culture manga fait partie de ma vie
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Me contacter</h4>
                        <p>
      
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Lieu :</span>
                                </div>
                                <p>
                                    Lyon
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email :</span>
                                </div>
                                <p>
                                    <span>mathieu.brignon@free.fr</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Scolarité :</span>
                                </div>
                                <p>
                                    <span>Gaming Campus, Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Numero de téléphone :</span>
                                </div>
                                <p>
                                    <span>0781615808</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues :</span>
                                </div>
                                <p>
                                    <span>Français, Anglais</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.facebook.com/mathieu.brignon.9" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/brignon_mathieu" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/PhartBlast" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/mathieu-brignon-2477b4230/?originalSubdomain=fr" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="fas fa-fire"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-moon"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>