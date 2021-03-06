<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()) : the_post() ; ?>
    <h1></h1>
    <main role="main" class="flex-shrink-0">
  <div class="container-fluid">
    <div class="row home-header">
      <div class="col-12">
        <h1 class="mt-5"><?php the_title() ; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php the_content();?>
      </div>
    </div>
  </div>
</main>

<?php endwhile; endif;?>
<?php get_footer(); ?>