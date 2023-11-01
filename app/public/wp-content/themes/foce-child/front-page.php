<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">  
            <video class="video-oscars"  autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> ">
                <source src=<?php echo get_theme_file_uri() . '/assets/video/video-studio.mp4'; ?> type="video/mp4">
            </video>  
            <img class="logo-koukaki" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"> 
        </section>
        <section id="link-story" class="story">
            <h2 class="titleStory"><span>L'Histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <div id="characters">
                <div class="main-character">
                    <h3><span>Les personnages</span></h3>
                </div>
            </div>
            
            <?php get_template_part( '/template-parts/characters-swiper' ); ?>
           
            <article id="place">
                <div>
                    <h3><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="clouds">
                    <img class="big-cloud" src="<?php echo get_theme_file_uri() . '/assets/img/big_cloud.png'; ?> " alt="image grand nuage"> 
                    <img class="little-cloud" src="<?php echo get_theme_file_uri() . '/assets/img/little_cloud.png'; ?> " alt="image petit nuage"> 
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span>Studio</span><span id="title-koukaki"> Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
       
        <?php get_template_part( '/template-parts/oscars' ); ?> <!-- Ajout -->

    </main><!-- #main -->

<?php
get_footer();
