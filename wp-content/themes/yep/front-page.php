<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <?php wp_footer(); ?>
        <header>
            <nav>
                <ul>
                    <li>
                        <figure>
                            <img src="" alt="">
                        </figure>
                    </li>
                    <li>ACCUEIL</li>
                    <li>À PROPOS</li>
                    <li>MES PROJETS</li>
                    <li>ME CONTACTER</li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h1>YEPFOLIO</h1>
                <h2>DÉVELOPPEMENT WEB & MOBILE</h2>
            </section>
            <section>
                <h2>YEPFOLIO EN QUELQUES MOTS</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur laborum sapiente numquam, rerum iure saepe? Unde modi in natus fugiat, molestias nisi iste officiis repellat atque porro nobis dicta ratione.</p>
            </section>
            <section>
                <h2>MES DERNIERS PROJETS</h2>
                <article>
                    <p>APPLICATION SANTÉ</p>
                    <p>Pharmacie de Maurepas</p>
                </article>
                <article>
                    <p>SITE E-COMMERCE</p>
                    <p>Boulangerie Galtier</p>
                </article>
                <article>
                    <p>SITE VITRINE</p>
                    <p>Pahrmacie de Maurepas</p>
                </article>
                <article>
                    <p>SITE INSTITUTIONNEL</p>
                    <p>Marie de Ploutruc</p>
                </article>
                <article>
                    <p>SITE PROMOTIONNEL</p>
                    <p>Festival des choses</p>
                </article>
            </section>
        </main>
        <footer>
            <h2>ME CONTACTER</h2>
            <form>
                <fieldset>
                    <label for "prenom-nom">Prénom + Nom*</label>
                    <input type="text" id="prenom-nom">
                </fieldset>
                <fieldset>
                    <label for "email">Email*</label>
                    <input type="email" id="email">
                </fieldset>
                <fieldset>
                    <label for "message">Message</label>
                    <textarea id="message"></textarea>
                </fieldset>
                <input type="submit" id="button" value="Envoyer">
            </form>
        </footer>
    </body>
</html>