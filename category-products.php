<?php get_header(); ?>
     <!-- Main -->
     <main>
      <div id="products-text">
             <p>Products</p>
      </div>
        <div class="products_container">
          <div class="products_row">
            
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'products'
                    // 'posts_per_page' => 12,
                );
                $product_query = new WP_Query($args);
              ?>

              <!-- Product Posts loop start -->
              <?php if ( $product_query->have_posts()) : ?>
                <?php while ( $product_query->have_posts()) : $product_query->the_post(); ?>
            <div class="product">
                  <?php if ( has_post_thumbnail()); ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?></a>
                    <p><?php the_title(); ?></p>
                    <p>¥<span><? echo get_field('price'); ?></span> +tax</p>
                    </a>
            </div>
            <!-- Product Posts loop end -->
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div style="position: absolute; left: 50%; transform: translateX(-50%);">
            <?php
              if(function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
              }
            ?>
            </div>

        </div>
            
        <!-- main ここまで -->
    </main>

    <?php get_footer(); ?>