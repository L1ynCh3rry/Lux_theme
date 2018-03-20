<?php 
get_header();
$cat_id = get_query_var('cat');
$args = array(
    "numberposts" => -1,
    "order" => "DESC",
    "orderby" => "post_date",
    "category" => "$cat_id"
);
$posts = get_posts($args);

?>



  




    <!---------- MAIN START ---------->
    <main>
        <div class="row">
            <div class="col-12" style="background: #b5db0a;">

                <!-- NEWS LIST -->
                <div class="grid mt-3 justify-content-between">


                      
                    
                    <!-- NEWS 1 -->
                    <?php foreach($posts as $pt){  ?>
                    <div class="grid-item">
                        <article class="col-11 mb-3 px-0 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            
                        <?php if(has_post_thumbnail($pt->ID)); ?>
                        <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?>
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="<?php echo $pimage[0]; ?>" alt="<?php echo $pt->post_title; ?>">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover"><?php echo $pt->post_title; ?></h3>
                            <p style="color: black; text-align: justify;" class="px-2"><?php echo date('y/m/Y', strtotime($pt->post_date)); ?></p>
                            <p style="color: black; text-align: justify;" class="px-2"><?php echo lux_get_more_excerpt($pt->post_content); ?></p>
                            <a href="<?php echo get_permalink($pt->ID); ?>" class="readmore">Read more</a>
                        </article>
                    </div>
                    <?php } ?>
                    <!-- NEWS 1 -->
                    
                    
                </div>
                <!-- NEWS LIST END -->



            </div>

        </div>
    </main>
    <!---------- MAIN END ---------->





<?php get_footer();?>