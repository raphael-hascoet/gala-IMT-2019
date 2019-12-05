<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le Gala IMT Atlantique - campus Nantes se déroulera le 15 Novembre 2019 à Nantes.">
    <meta property="og:image" content="img/screenshot.jpg" />

    <title>Gala IMT Atlantique | Campus Nantes</title>

    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/index.css?version=2.1" rel="stylesheet">
    <link href="css/media.css?version=2.1" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/icons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/icons/touch-icon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/touch-icon.png" />
</head>

<body>
    <header id="menu-button">
        <div class="hamburger" id="hamburger-12">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </header>

    <nav>
        <ul>
            <!-- <li><img src="img/logo_2019.png" id="logo-menu" alt=""/></li> -->
            <li id="home-link" class="menu-link"><a href="#home">accueil</a></li>
            <li id="artists-link" class="menu-link"><a href="#artists">les artistes</a></li>
            <li id="animations-link" class="menu-link"><a href="#animations">animations</a></li>
            <!-- <li id="billeterie-link" class="menu-link"><a href="#billeterie">billeterie</a></li> -->
            <li id="faq-link" class="menu-link"><a href="#faq">faq</a></li>
            <li id="contact-link" class="menu-link"><a href="#contact">contact</a></li>
            <li>
                <div class="social-media">
                    <a href="https://www.facebook.com/GalaIMTATLANTIQUE"><img src="img/icons/facebook.png" alt=""/></a>
                    <!-- <a href="https://twitter.com/Gala_imta"><img src="img/icons/twitter.png" alt=""/></a> -->
                    <!-- <a href="https://www.instagram.com/GalaIMTA"><img src="img/icons/instagram.png" alt=""/></a> -->
                </div>
            </li>
        </ul>
    </nav>

    <section id="home">
        <div class="pseudo-element"></div>
        <h1>
            <img id="gala-logo" src="img/logo_2019.png" alt=""/>
            <!-- <div class='container'>
                <a href='https://www.youtube.com/watch?v=XRyE4hJVQos' target="_blank" class='playBut'> -->

                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                    <!-- <svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                    x="0px" y="0px" width="103.7px" height="103.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">

                        <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                        73.5,62.5 148.5,105.8 73.5,149.1 "/>

                        <circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="100.8" cy="105.8" r="83.3"/>
                    </svg>
                </a>
            </div> -->
        </h1>
        <h3 id="gala-date">Vendredi 15 Novembre</h3>
    </section>

    <div id="artists-wrapper">
        <canvas id="canvas"></canvas>
        <section id="artists">
            <h2 class="bullet">les artistes</h2>
            <div id="artists-logos">
                <img src="img/thomas_marchadier.png" width="100%" alt=""/>
                <img src="img/bellaire_white.png" width="70%" alt=""/>
                <img src="img/etienne_de_crecy.png" width="70%" alt=""/>
            </div>
        </section>
    </div>

    <section id="animations" class="fireworks">
        <h2 class="bullet">animations</h2>
        <div class="section-content">
            <button type="button" class="animation-nav" id="left"><img src="img/icons/arrow-left.svg" alt=""/></button>
            <div id="animation-description">
                <div class="animation-element visible" id="fireworks">
                    <h3 class="underline">Feu d'Artifice</h3>
                    <p>Comme chaque année, le Gala commencera avec son feu d'artifice unique ! Il débutera à 22h et sera visible depuis le parvis de l'école.</p>
                </div>

                <div class="animation-element" id="bars">
                    <h3 class="underline">Bars à thème</h3>
                    <p>Les étudiants de première année vous attendent dans leurs bars, où ils auront imaginé et créé un univers autour du thème SCIENCE-FICTION.</p>
                </div>

                <div class="animation-element" id="champagne">
                    <h3 class="underline">Champagne</h3>
                    <p>C'est désormais une tradition, le Gala a son Bar à Champagne. Les plus fines bulles seront au rendez-vous pour votre plus grand plaisir.</p>
                </div>

                <div class="animation-element" id="pom-pom">
                    <h3 class="underline">Show Pom-Pom</h3>
                    <p>Centrale, Polytech, l'ESB et IMT s'affronteront dans une battle où la victoire sera attribuée à l'applaudimètre. Venez nombreux pour élire vos préférées !</p>
                </div>

                <div class="animation-element" id="cabaret">
                    <h3 class="underline">Cabaret Véto</h3>
                    <p>Cette année, le Cabaret Véto revient sur les planches du Gala. Ne manquez pas ce show sensuel et rythmé !</p>
                </div>
            </div>
            <button type="button" class="animation-nav" id="right"><img src="img/icons/arrow-right.svg" alt=""/></button>
        </div>
    </section>


    <section id="billeterie">
        <h2 class="underline">billets en vente</h2>
        <div class="section-content">
            <div class="ticket-sale-point">
                bde <br/>
                nantais
            </div>
            <a class="ticket-sale-point" href="https://collecte.io/gala-2019-235846/fr" target="_blank">
                en <br/>
                ligne <img src="img/icons/Arrow-OutRight-icon.png" alt=""/>
            </a>
            <div class="ticket-sale-point">
                sur <br/>
                place
            </div>
        </div>
    </section>

    <div id="faq">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.640372584746!2d-1.5230332839751737!3d47.282284179164535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805f025f36020eb%3A0x61686ccc330fe5ca!2sIMT+Atlantique!5e0!3m2!1sfr!2sfr!4v1503948596639" allowfullscreen></iframe>
        <div id="faq-content">
            <section id="page-0">
                <h2 class="underline">faq</h2>
                <ol>
                    <li><h3><button type="button" class="faq-link" id="button-page-1">comment s'y rendre ?</button></h3></li>
                    <li><h3><button type="button" class="faq-link" id="button-page-2">comment rentrer ?</button></h3></li>
                    <li><h3><button type="button" class="faq-link" id="button-page-3">sécurité</button></h3></li>
                </ol>
            </section>
            <section id="page-1">
                <h2 class="underline center">comment s'y rendre ?</h2>
                <ul>
                    <li>
                        <ul>
                            <li><h3>voiture</h3></li>
                            <li>Périphérique Nord </li>
                            <li>– Direction La Chantrerie </li>
                            <li>Autoroute A11 </li>
                            <li>– Sortie 24 depuis Paris </li>
                            <li>Autoroute A11 </li>
                            <li>– Sortie 25 depuis Saint Nazaire</li>
                        </ul>
                    </li>

                    <li>
                        <ul>
                            <li><h3>bus</h3></li>
                            <li>75 – arrêt Chantrerie</li>
                            <li>C6 – arrêt Chantrerie</li>
                        </ul>
                    </li>

                    <li>
                        <ul>
                            <li><h3>covoiturage</h3></li>
                            <li>blablacar.fr</li>
                            <li>covoiturage.chantrerie</li>
                        </ul>
                    </li>
                </ul>

                <button type="button" class="faq-back" id="back-page-1"></button>
            </section>

            <section id="page-2">
                <h2 class="underline center">Comment rentrer ?</h2>
                <ul>
                    <li>
                        <ul>
                            <li><h3>navette</h3></li>
                            <!-- <li>Prix 2€ </li>
                            <li>Départ : Ecole IMT Atlantique.</li>
                            <li>Arrêts : Centrale-Audencia et Foch-Cathédrale. </li> -->

                        </ul>
                    </li>

                    <li>
                        <ul>
                            <li><h3>covoiturage</h3></li>
                            <li>blablacar.fr</li>
                            <li>covoiturage.chantrerie</li>
                        </ul>
                    </li>

                    <li>
                        <ul>
                            <li><h3>voiturier</h3></li>
                            <li>taxis</li>
                            <li>uber</li>
                        </ul>
                    </li>
                </ul>

                <button type="button" class="faq-back" id="back-page-2"></button>
            </section>

            <section id="page-3">
                <h2 class="underline center">Sécurité</h2>
                <ul>
                    <li>L'organisation se réserve le droit d'entrée.</li>
                    <li>Entrée interdite aux moins de 18 ans.</li>
                    <li>Vous devez être en possession d'une pièce d'identité officielle.</li>
                    <li>Tout comportement jugé violent ou inapproprié entraînera l'exclusion définitive de la soirée.<br/>
                    <a href="http://www.avenir-sante.com/">&rarr; Avenir Santé</a>
                    </li>
                </ul>

                <button type="button" class="faq-back" id="back-page-3"></button>
            </section>
        </div>
    </div>

    <section id="sponsors">
        <h2 class="underline">nos partenaires</h2>
        <div class="section-content">
            <div class="sponsor-element">
                <img src="img/sponsors/flams.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/forum_atlantique.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/fun_radio.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/ibis_beaujoire.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/jacquinot.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/junior_atlantique.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/loc_eco.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/lu6d.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/lydia.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/soge.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/soonnight.png" alt="">
            </div>
            <div class="sponsor-element">
                <img src="img/sponsors/wonderbox.png" alt="">
            </div>
        </div>
        

         <!-- <div id="logo-imt">
                <img src="img/sponsors/imt.png" width="100" alt="">
        </div> -->
    </section>

    <section id="contact">
        <h2>contact</h2>
        <p id="contact-help">
            Une question ? Une remarque ? N’hésitez pas à nous contacter,
            nous serons ravis de vous répondre !
        </p>
        <div id="contact-content">
            <form method="POST">
                <fieldset id="contact-name">
                    <input name="prenom" type="text" value="Prénom" required/>
                    <input name="nom" type="text" value="Nom" required/>
                </fieldset>
                <p id="prenom-error" class="error">Merci de renseigner votre prénom</p>
                <p id="nom-error" class="error">Merci de renseigner votre nom</p>
                <input name="email" type="text" value="Email" required/>
                <p id="email-error" class="error">Merci de renseigner un email valide</p>
                <textarea required>Message</textarea>
                <p id="message-error" class="error">Le champ message est obligatoire</p>
                <input type="submit" class="fill">

                <p id="success" class="contact-result">Merci de nous avoir contacté, nous vous répondrons dans les plus brefs délais.</p>
                <p id="fail" class="contact-result">Merci de compléter le formulaire.</p>
            </form>

            <div id="contact-info">
                <div class="contact-info-element">
                    <div>
                        <img src="img/icons/location.png" class="icon" alt=""/>
                    </div>
                    <div class="contact-text">
                        Gala IMT Atlantique <br/>
                        4 rue Alfred Kastler <br/>
                        44300 Nantes, France
                    </div>
                </div>

                <a href="mailto:contact@gala-imt-atlantique.com" class="contact-info-element">
                    <div>
                        <img src="img/icons/email.png" class="icon" id="email-icon" alt=""/>
                    </div>
                    <div class="contact-text">
                        contact@gala-imt-atlantique.com
                    </div>
                </a>

                <div class="contact-info-element social-media">
                    <a href="https://www.facebook.com/GalaIMTATLANTIQUE"><img src="img/icons/facebook.png" alt=""/></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        © Maxime MAHEO - Symphonie RAZAFINDRABE
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/form.js"></script>
</body>

</html>
