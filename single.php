<?php get_header() ?>
	</div> 
	<!-- end header -->
	<div class="container post_detail">    
    <div class="row">
      <div class="col-sm-10">
      
        <div class="row">

          <div class="col-sm-12">

            <h1 class="single-title"><?php the_title() ?></h1>

            <!-- lấy bài viết (get post) mặc định -->
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            	<div class="meta">
            		<span>Ngày đăng: <?php echo get_the_date('d - m - Y') ?></span>
            		
            	</div>
            	<article class="post-content">
            		<?php the_content() ?>
            	</article>

            	<div class="tag">
            		<p><?php the_tags('Từ khóa: '); ?> </p> 
            	</div>

            <?php endwhile; ?>
            <?php endif ?>

          </div>

        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>
