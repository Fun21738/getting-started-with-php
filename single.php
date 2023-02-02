<?php get_header(); ?>

<div class="container pt-10 pb-5">
   <h1><?php the_title();?></h1>

   <?php if(has_post_thumbnail()):?>
    <image src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
<?php endif;?>



    <?php if (have_posts()):while(have_posts()):the_Post();?>
    <?php the_content();?>
<?php endwhile;endif;?>

</div>

<?php get_footer(); ?>
