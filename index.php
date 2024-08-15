<?php 
/*
Template Name: Новости
*/

get_header(); ?>

<section class="news-search search-wrapper">
    <a style="padding: .75rem; border-radius: 1.5rem; background: #76ff33; text-decoration: none;">
    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input style="background-color: #76ff33;border: brown;padding: 6px;font-size: 15px;" type="text" name="s" placeholder="Поиск по новостям" value="<?php the_search_query(); ?>">
        <input type="hidden" name="post_type" value="post" /> <!-- Ищем только посты -->
        <button style="background-color: #76ff33; padding: 6px;font-size: 15px; border-radius: 12px;" type="submit">Искать</button>
    </form>
    </a>
</section>

<section class="news-list">
    <div class="news-list-wrapper">
    <?php
        // Если есть поисковый запрос
        if ( isset($_GET['s']) ) {
            $search_query = sanitize_text_field( $_GET['s'] );
            $args = [
                'numberposts' => -1,
                'category_name' => 'news',
                'orderby'     => 'title',
                'order'       => 'ASC',
                'post_type'   => 'post',
                's'           => $search_query, // Поиск по постам
                'suppress_filters' => true,
            ];
        } else {
            // Если поискового запроса нет, выводим все новости
            $args = [
                'numberposts' => -1,
                'category_name' => 'news',
                'orderby'     => 'title',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ];
        }

        $my_posts = get_posts( $args );
        
        if ( $my_posts ) {
            foreach( $my_posts as $post ){
                setup_postdata( $post );
        ?>
           
            <a href="<?php echo get_permalink(); ?>" class="news-card" draggable="false">
                <div class="image">
                    <div class="filler"></div>
                    <div class="image-wrapper image-loader">
                        <?php the_post_thumbnail('adv_thumbnail'); ?>
                        <div class="loader fade-out">
                            <div class="loader-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="date"><?php echo get_the_date(); ?></div>
                </div>
                <h3><?php the_title(); ?></h3>
            </a>
            
        <?php } 
        } else {
            echo '<p>Ничего не найдено.</p>';
        }

        wp_reset_postdata(); // сброс
    ?>    
    </div>
</section>

<?php get_footer(); ?>
