<?php

get_header(); ?>

<div class="container clearfix">
	<div id="" class="text-center" role="main">
    <header class="page-header">
      <h1 class='text-danger'>404 </h1>
      <h2 class="page-title">Oops! That page can&rsquo;t be found.',</h2>
    </header><!-- .page-header -->
    <div class="page-content">
      <p class=''>
        It looks like nothing was found 
        at this location. Maybe try one of
        the links below or a search?
      </p>							
    </div><!-- .page-content -->
    <div class="">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" type="button">
        <span>Back To Home .</span>
      </a>
    </div><!-- .page-content -->
	</div><!-- #main -->
</div>

<?php get_footer();