<?php get_header('header');?>
<section class="page">
  <h2 class="page-title">Works</h2>
  <?php if(have_posts()):?>
  <?php while(have_posts()):the_post();?>
  <h3 class="page-sub"><?php the_title();?></h3>
  <div class="page-con"><?php the_content();?></div>
</section>
<?php endwhile;?>
<?php endif;?>
<?php get_footer();?>