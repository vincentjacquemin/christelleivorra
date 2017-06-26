<?php
$skillsMatching = [
    'english' => 'Anglais professionnel courant',
    'spanish' => 'Espagnol scolaire',
    'office' => 'Pack office',
    'photoshop' => 'Retourche et création de visuel sur Photoshop et Gimp',
    'sketchup' => 'Création de maquettes 3D sur Sketchup',
    'iri' => 'IRI',
    'sap' => 'SAP',
    'kantar' => 'Kantar',
    'wordpress' => 'Gestion et création de sites Internet via WordPress',
    'social' => 'Management des médias sociaux',
    'providers' => 'Négociation et suivi auprès de fournisseurs',
    'writting' => 'Bonnes capacités rédactionnelles',
    'adaptation' => 'Forte capacité d’adaptation',
    'organisation' => 'Organisation et rigueur',
    'creation' => 'Créativité',
    'proactivity' => 'Proactivité',
    'collaboration' => 'Collaboration efficace avec des partenaires aux profils variés'
];

$website = 'http://test.civorra.fr';

if (!isset($_POST) || empty($_POST)) {
    header('Location: http://www.civorra.fr');
}
else {
    $to = "vincentjacquemin34@gmail.com";
    $subject = "Civorra - Un recruteur vous recherche";

    $headers = "From: christelleivorra@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = "<div>Voici les compétences que le recruteur a coché : </div>";
    $message .= "<ul>";
    foreach ($_POST as $categoryLabel => $categoryData) {
        foreach ($categoryData as $label => $value) {
            if (isset($skillsMatching[$label])) {
                $message .= "<li>" . $skillsMatching[$label] . "</li>";
            }
        }
    }
    $message .= "</ul>";

    mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php echo $website ?>/xmlrpc.php">

        <title>Christelle Ivorra</title>
        <meta name='robots' content='noindex,follow' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="Christelle Ivorra &raquo; Flux" href="<?php echo $website ?>/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Christelle Ivorra &raquo; Flux des commentaires" href="<?php echo $website ?>/comments/feed/" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/test.civorra.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"}};
            !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='dashicons-css'  href='<?php echo $website ?>/wp-includes/css/dashicons.min.css?ver=4.8' type='text/css' media='all' />
        <link rel='stylesheet' id='admin-bar-css'  href='<?php echo $website ?>/wp-includes/css/admin-bar.min.css?ver=4.8' type='text/css' media='all' />
        <link rel='stylesheet' id='pirate_forms_front_styles-css'  href='<?php echo $website ?>/wp-content/plugins/pirate-forms/css/front.css?ver=4.8' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_font-css'  href='//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C400italic%7CMontserrat%3A400%2C700%7CHomemade+Apple&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_font_all-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;subset=latin&#038;ver=4.8' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_bootstrap_style-css'  href='<?php echo $website ?>/wp-content/themes/zerif-lite/css/bootstrap.css?ver=4.8' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_fontawesome-css'  href='<?php echo $website ?>/wp-content/themes/zerif-lite/css/font-awesome.min.css?ver=v1' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_style-css'  href='<?php echo $website ?>/wp-content/themes/civorra/style.css?ver=v1' type='text/css' media='all' />
        <link rel='stylesheet' id='zerif_responsive_style-css'  href='<?php echo $website ?>/wp-content/themes/zerif-lite/css/responsive.css?ver=v1' type='text/css' media='all' />
        <!--[if lt IE 9]>
        <link rel='stylesheet' id='zerif_ie_style-css'  href='<?php echo $website ?>/wp-content/themes/zerif-lite/css/ie.css?ver=v1' type='text/css' media='all' />
        <![endif]-->
        <script type='text/javascript' src='<?php echo $website ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='<?php echo $website ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var pirateFormsObject = {"errors":""};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?php echo $website ?>/wp-content/plugins/pirate-forms/js/scripts-general.js?ver=4.8'></script>
        <!--[if lt IE 9]>
        <script type='text/javascript' src='<?php echo $website ?>/wp-content/themes/zerif-lite/js/html5.js?ver=4.8'></script>
        <![endif]-->
        <link rel='https://api.w.org/' href='<?php echo $website ?>/wp-json/' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $website ?>/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo $website ?>/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.8" />
        <link rel="canonical" href="<?php echo $website ?>/" />
        <link rel='shortlink' href='<?php echo $website ?>/' />
        <link rel="alternate" type="application/json+oembed" href="<?php echo $website ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftest.civorra.fr%2F" />
        <link rel="alternate" type="text/xml+oembed" href="<?php echo $website ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftest.civorra.fr%2F&#038;format=xml" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <style type="text/css" media="print">#wpadminbar { display:none; }</style>
    </head>

    <body class="home page-template-default page page-form-accept logged-in admin-bar no-customize-support" >
    <div id="mobilebgfix">
        <div class="mobile-bg-fix-img-wrap">
            <div class="mobile-bg-fix-img"></div>
        </div>

        <div class="mobile-bg-fix-whole-site">
            <header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
                <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
                    <div class="container">
                        <div class="navbar-header responsive-logo">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Afficher/masquer la navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="navbar-brand">
                                <div class="site-title-tagline-wrapper">
                                    <h1 class="site-title">
                                        <a href=" <?php echo $website ?>/ ">
                                            Christelle Ivorra									</a>
                                    </h1>
                                </div> <!-- /.site-title-tagline-wrapper -->
                            </div> <!-- /.navbar-brand -->
                        </div> <!-- /.navbar-header -->

                        <nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <a class="screen-reader-text skip-link" href="#content">Aller au contenu principal</a>
                            <ul id="menu-civorra" class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a href="<?php echo $website ?>">Accueil</a></li>
                            </ul>
                        </nav>
                    </div> <!-- /.container -->
                </div> <!-- /.main-nav -->
            </header> <!-- / END HOME SECTION  -->
            <div class="main-content">
                <h2>VOUS RECHERCHEZ UNE CANDIDATE AVEC LES COMPETENCES SUIVANTES</h2>

                <div class="competences">
                    <ul>
                    <?php foreach ($_POST as $categoryLabel => $categoryData): ?>
                        <?php foreach ($categoryData as $label => $value): ?>
                            <?php if (isset($skillsMatching[$label])): ?>
                            <li><span class="highlight">★</span> <?php echo $skillsMatching[$label] ?> </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    </ul>
                </div>

                <div class="image-wrapper photo-id">
                    <img width="156" height="155" src="<?php echo $website ?>/wp-content/uploads/2017/06/ID.png" class="attachment-medium size-medium" alt="">
                </div>

                <div class="response">
                    Je serai ravie de mettre à profit mes compétences dans votre équipe !
                </div>

                <div class="contact">
                    <h3>Contactez-moi</h3>
                    <div class="contact-methods">
                        par téléphone : <a href="tel:0675885168" title="Telephone">06 75 88 51 68</a> <br />
                        par email : <a href="mailto:christelleivorra@gmail.com" title="Email">christelleivorra@gmail.com</a> <br />
                        ou via le <a href="<?php echo $website ?>#contact">formulaire de contact</a>
                    </div>
                </div>
            </div>

            <footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
                <div class="container">
                    <div class="col-md-3 company-details">
                        <div class="icon-top red-text">
                            <a href="https://www.linkedin.com/profile/christelleivorra" title="Linkedin"><img src="<?php echo $website ?>/wp-content/uploads/2017/06/lnkd.png" alt="linkedin">
                        </div>
                    </div>

                    <div class="col-md-3 company-details">
                        <div class="icon-top green-text">
                            <a href="https://www.viadeo.com/profile/christelleivorra" title="Viadeo"><img src="<?php echo $website ?>/wp-content/uploads/2017/06/viadeo.png" alt="viadeo">
                        </div>
                    </div>

                    <div class="col-md-3 company-details">
                        <div class="icon-top blue-text">
                            <a href="tel:0675885168" title="Telephone"><img src="<?php echo $website ?>/wp-content/uploads/2017/06/phone.png" alt="telephone"></a>
                        </div>
                        <div class="zerif-footer-phone">06 75 88 51 68</div>
                    </div>

                    <div class="col-md-3 copyright">
                        <p id="zerif-copyright">Développé par Vincent JACQUEMIN<br>Design : Christelle IVORRA<br><a href="#">Crédits images</a> <br></p>
                        <div class="zerif-copyright-box">
                            <a class="zerif-copyright" rel="nofollow">Zerif Lite </a>developed by <a class="zerif-copyright" href="https://themeisle.com" target="_blank" rel="nofollow"> ThemeIsle</a>
                        </div>
                    </div>
                </div> <!-- / END CONTAINER -->
            </footer>
        </div>
    </body>
</html>