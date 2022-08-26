    <?php get_header(); ?>
    <!-- Main -->
    <main>
        <!-- loop start -->
        <?php if ( have_posts()) : ?>
            <?php while ( have_posts()) : the_post(); ?>
        <div id="products-text">
            <p><?php the_title(); ?></p>
        </div>
        <div id="product_detail">
            <?php if ( has_post_thumbnail()); ?>
                <?php the_post_thumbnail(); ?>
            <div id="detail">
                <p class="detail_text"><?php the_content(); ?></p>
                <br><br>
                <p class="detail_text"><?php the_content(); ?></p>
                <br><br>
                <p>¥<span><?php echo get_field('price'); ?> +tax</p>
                <br><br>
                <div  style="display:flex;">
                 <div style="margin-right: 20px;">   
                <p><span style="margin-right: 10px;">SIZE</span>:</p>
                <p><span style="margin-right: 10px;">COLOR</span>:</p>
                <p><span style="margin-right: 10px;">MATELIAL</span>:</p>
                </div>
                <div>
                    <p>W<span><?php echo get_field('size-w') ?></span> x D<span><?php echo get_field('size-d') ?></span>  x H<span><?php echo get_field('size-h') ?></span></p>
                    <p><?php echo get_field('color') ?></p>
                    <p><?php echo get_field('material') ?></p>
                </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <!-- loop end -->

        <div id="back-to-product">
            <a  href="/category/products/">Back To Products</a>
        </div>
        <!-- main ここまで -->
    </main>

    <?php get_footer(); ?>