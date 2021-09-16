<?php get_header(); ?>

<main class="main-container">
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <?php the_content(); ?>

        <?php    }
    }?>

    <div class="lista-ingredientes">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'Ingrediente',
                'post_per_page' => -1, 
                // 'order'         => 'ASC',
                // 'orderby'       => 'title'
            );

            $ingredientes = new WP_Query($args);

            if($ingredientes->have_posts()){
                while($ingredientes->have_posts()){
                    $ingredientes->the_post();
                    ?>

                    <div class="col-12 col-md-4 ingrediente-container text-center" id="<?php the_title();?>">
                        <figure>
                            <?php the_post_thumbnail('large'); ?>
                        </figure>
                        <h4>
                            <?php the_content();?>
                        </h4>
                    </div>

            <?php }
            }

            ?>
        </div>
    </div>
</main>
<!-- carousel section -->
<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
    <ol class="carousel-indicators">
		<?php
			$indicator=0;
            $carousel = new WP_Query(array(
                'post_type'     => 'carousel',
                'posts_per_page' => -1,
            ));
            while($carousel->have_posts()){
                $carousel->the_post();
		?>
            <li data-target="#carouselExampleSlidesOnly" data-slide-to="<?php echo $indicator; ?>" class="<?php echo ($indicator == 1) ? 'active':''; ?>"></li>
		<?php $indicator++; } ?>
    </ol>
    <div class="carousel-inner">
		<?php
			$activetor=0;
            $myPost = new WP_Query(array(
                'post_type'     => 'carousel',
                'posts_per_page' => -1,
            ));
            while($myPost->have_posts()){
                $myPost->the_post();
				$activetor++;
		?>
        <div class="carousel-item <?php echo ($activetor == 1) ? 'active':''; ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="d-block" alt="...">
        </div>    
			
        <?php } ?> 	
    </div>
</div>

<?php get_footer(); ?>