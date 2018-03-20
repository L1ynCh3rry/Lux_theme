<?php ?>

<?php 
if(has_post_thumbnail($post->ID)):
    $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
endif;

$category = get_the_category();
$cat_id = $category[0]->cat_ID;

$author = get_the_author_meta('nickname', $post->post_author);

get_header();
?>


<!---------- MAIN START ---------->
<main>
        <div class="row">
            <div class="col-12 col-lg-9" style="background: #b5db0a;">

                <!-- ROW NUMBER 1 -->
                <div class="row justify-content-around" style="background: #f7f6d2; border: 1px solid black;">
                    <div class="col-11" style="position: relative;">
                        <figure class="mainfigure my-3">
                            <img src="<?php echo $pimage[0]; ?>" alt="<?php echo $pt->post_title; ?>">
                        </figure>
                        <div style="position: absolute; bottom: 5px; left: 10%; width: 80%;">
                            <h1 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black; text-align: center;" class="m-0 py-2 newsh3hover singleh1"><?php echo $pt->post_title; ?></h1>
                        </div>
                    </div>
                    <div class="col-11">
                        <p style="color: black; text-align: justify;" class="px-2"><?php echo $pt->post_date; ?></p>
                        <p style="color: #4f4f4f; text-align: justify;" class="px-2"><?php echo $pt->post_content; ?></p>
                        
                        <div class="pb-2">
                            <h3 style="color: black; border-radius: 5px; border-left: 2px solid black; padding-left: 5px;">Tags:</h3>
                            <a href="#" style="color: black; font-size: 16px; text-decoration: underline; border-right: 0.5px solid black;" class="pr-2 mr-2"><?php echo $pt->post_tags; ?></a>
                        </div>

                    </div>
                </div>
                <!-- COMMENT -->
                <div class="row comment mx-2 mx-lg-5 my-2 my-lg-5" style="border: 1px solid black; background: #f7f6d2">
                    <div class="col-10 col-lg-2 d-flex justify-content-center" style="text-align: center;">
                        <figure style="padding-bottom: 0;">
                            <img src="img/comment.png">
                        </figure>
                    </div>
                    <div class="col-12 col-lg-10" style="background: #00013d; position:relative; color: #f7f6d2;">
                        <h1><b>John</b></h1>
                        <h3 style="text-decoration: underline;">March 11, 2018</h3>
                        <p style="text-align: justify; font-style: italic;">
                            I saw that same photo going around facebook in the summer to warn people that the pavements were too hot for dogs as the temperature went above 30°C. Not saying that the grit isn't dangerous for dogs as I would trust the RSPCA but that picture most likely
                            does not go with the description.
                        </p>
                        <ul style="position: absolute; bottom: -15px; right: 0; background: #000151; border-top: 1px solid #f7f6d2;border-left: 1px solid #f7f6d2;" class="pl-3">
                            <li style="display: inline-block; font-size: 24px;"><i class="far fa-thumbs-up"></i></li>
                            <li style="display: inline-block; font-size: 16px;" class="pr-2">
                                22
                            </li>
                            <li style="display: inline-block; font-size: 24px;"><i class="far fa-thumbs-down"></i></li>
                            <li style="display: inline-block; font-size: 16px;" class="pr-2">
                                4
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- LEAVE COMMENT -FORM- -->
                <div class="row comment mx-2 mx-lg-5 my-2 my-lg-5" style="border: 1px solid black; background: #f7f6d2">
                    <div class="col-10 col-lg-2 d-flex justify-content-center pt-4" style="text-align: center;">
                        <figure class="" style="border-radius: 50%; width: 50px; height: 50px; border: 5px solid #f7f6d2">
                            <img src="img/if_user 5_6712.png">
                        </figure>
                    </div>
                    <div class="col-12 col-lg-10" style="background: #00013d; color: #f7f6d2;">
                        <form class="form-contact fgsingle" method="post" action="#">
                            <h2 style=" padding-bottom: 5px; border-radius: 5px; border-left: 2px solid black;" class="pl-2">Leave a comment!</h2>
                            <div class="form-group">
                                <label>Username*</label>
                                <input name="W_username" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Comment*</label>
                                <textarea name="W_comment" value="" class="form-control"></textarea>
                                <div class="error"></div>
                            </div>


                            <button type="submit" class="btn hvr-shutter-in-vertical mb-2" style="cursor: pointer; border-radius: 0;">Post comment!</button>
                            <a href="register.html" class="btn hvr-shutter-in-vertical mb-2" style="cursor: pointer; border-radius: 0;">Not a member? Register.</a>
                        </form>
                    </div>
                </div>







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
                            <a href="#" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 2 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="img/dog-walk.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">The average dog owner walks their pet 1,000 miles in a year.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">Dog owners trek more than 1,000 miles, play 2,080 rounds of fetch – and call their pet’s name 3,120 times while walking them each year, a study has found.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 3 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="img/hero-dog.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">US Army dog that attacked machine-gun nest in Second World War awarded posthumous medal for bravery.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">A US Army dog that attacked a machine-gun nest during the Second World War has been posthumously awarded Britain's highest honour for animal bravery.Chips, a German shepherd-husky cross, was awarded the Dickin Medal for actions
                                during a 1943 beach landing in Sicily.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!---------- MAIN END ---------->




<?php get_footer(); ?>