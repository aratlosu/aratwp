<?php get_header();
?>

<?php


while(have_posts()) {
the_post();?>
<div class="post-item">
    <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="metabox">
        <p>Category <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Know more &raquo; </a></p>
    </div>
</div>
<?php }
?>
<?php get_footer();
?>