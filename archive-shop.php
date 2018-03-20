<?php 

/**
 * Template Name: Shop Template
 */ 
 
 get_header(); ?>





    <!---------- MAIN START ---------->
    <main>
        <div class="row">
            <div class="col-12 col-lg-9" style="background: #b5db0a;">

                <!-- DOGS LIST -->
                <div class="grid mt-3 justify-content-between">

                    
                    <!-- NEWS 1 -->
                    <!-- <?php foreach($posts as $pt){  ?>
                    <div class="grid-item">
                    <article class="mb-3 px-0 newshover photozoom" style="border: 4.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                             
                        <?php if(has_post_thumbnail($pt->ID)); ?>
                        <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?>
                        <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="<?php echo $pimage[0]; ?>" alt="<?php echo $pt->post_title; ?>">
                            </figure>
                            <h3 style="background: #00013d; color: #f7f6d2; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover"><?php echo $pt->post_title; ?></h3>
                            <p style="color: black; text-align: justify;" class="px-2"><?php echo date('y/m/Y', strtotime($pt->post_date)); ?></p>
                            <p style="color: black; text-align: left;" class="px-2 mb-0"><?php echo lux_get_more_excerpt($pt->post_content); ?></p>
                            <a href="<?php echo get_permalink($pt->ID); ?>" class="readmore">Read more</a>
                        </article>
                    </div>
                    <?php } ?> -->
                    <!-- NEWS 1 -->



                     <!-- DOG 1 -->
                     <?php foreach($posts as $pt){  ?>
                     <div class="grid-item">
                        <article class="mb-3 px-0 newshover photozoom" style="border: 4.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                        
                        <?php if(has_post_thumbnail($pt->ID)); ?>
                        <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?>
                        <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="<?php echo $pimage[0]; ?>">
                            </figure>
                            <h3 style="background: #00013d; color: #f7f6d2; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover"><?php echo $pt->post_title; ?></h3>
                            <p style="color: black; text-align: justify;" class="px-2"><?php echo date('y/m/Y', strtotime($pt->post_date)); ?>
                            <p style="color: black; text-align: left;" class="px-2 mb-0"><?php echo lux_get_more_excerpt($pt->post_content); ?></p>
                            <a href="<?php echo get_permalink($pt->ID); ?>" class="readmore">Read more</a>
                        </article>
                    </div>
                    <?php } ?>
                    <!-- DOG 1 END -->






                </div>
                <!-- DOGS LIST END -->



            </div>
            <div class="col-12 col-lg-3 asideNews" style="background: #00013d; color: #b5db0a;">
                <div>
                    <!-- NEWS -->
                    <h1 class="blognews">BLOG NEWS</h1>
                    <div class="row justify-content-around no-gutters">

                        <!-- NEWS 1 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="img/dog-snow.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">Grit used on roads during snowy weather can be dangerous for pets.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">Gritters are out in full force this week as the UK is faced with sub-zero temperatures at the hands of the Beast from the East and Storm Emma.</p>
                            <a href="single.html" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 2 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="img/dog-walk.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">The average dog owner walks their pet 1,000 miles in a year.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">Dog owners trek more than 1,000 miles, play 2,080 rounds of fetch – and call their pet’s name 3,120 times while walking them each year, a study has found.</p>
                            <a href="single.html" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 3 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="img/hero-dog.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">US Army dog that attacked machine-gun nest in Second World War awarded posthumous medal for bravery.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">A US Army dog that attacked a machine-gun nest during the Second World War has been posthumously awarded Britain's highest honour for animal bravery.Chips, a German shepherd-husky cross, was awarded the Dickin Medal for actions
                                during a 1943 beach landing in Sicily.</p>
                            <a href="single.html" class="readmore">Read more</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!---------- MAIN END ---------->




 <?php get_footer(); ?>