<?php 

/**
 * Template Name: Login Template
 */ 
 
 get_header(); ?>


 <!---------- MAIN START ---------->
 <main>
        <div class="row">
            <div class="col-12 col-lg-9" style="background: #b5db0a;">
                <!-- Button Trigger for menu on smartphones -->

                <!-- ROW NUMBER 1 -->
                <div class="row no-gutters p-5 justify-content-around">

                    <div class="col-12 col-lg-6">
                        <!----------------- CONTACT FORM -------------------->
                        <form class="form-contact" method="post" action="#">

                            <div class="form-group">
                                <label>Username*</label>
                                <input name="W_username" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input name="W_password" type="password" value="" class="form-control" id="password">
                                <div class="error"></div>
                            </div>



                            <input type="checkbox" name="checkbox" value="check" class="mt-2" /></span> Stay logged in.<br><br>


                            <button type="submit" class="btn hvr-shutter-in-vertical" style="cursor: pointer; border-radius: 0;">SUBMIT</button>
                            <a href="register.html" class="btn hvr-shutter-in-vertical" style="cursor: pointer; border-radius: 0;">Not a member? Register.</a>
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


<script type="text/javascript">
        // FORM VALIDATION 
        $(document).ready(function() {
            $(function() {
                $(".form-contact").validate({
                    highlight: function(element) {
                        $(element).closest('.form-group').addClass("has-danger");
                        $(element).addClass("form-control-danger");
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                        $(element).removeClass('form-control-danger').addClass('form-control-success');
                    },
                    rules: {
                        W_username: {
                            required: true,
                            rangelength: [6, 20]
                        },
                        W_password: {
                            required: true,
                            rangelength: [5, 20]
                        }
                    },
                    messages: {
                        W_username: {
                            required: "The *Username field is required!",
                            rangelength: "The *Name must be between 6 and 20 characters!"
                        },
                        W_password: {
                            required: "The *Password field is required!",
                            rangelength: "The *Message must be between 5 and 20 characters!",
                            email: "Please enter a valid message!"
                        }
                    },
                    errorElement: 'p',
                    errorPlacement: function(error, element) {
                        error.appendTo($(element).closest('.form-group').find('.error'));
                    }

                });
            });
        });
        //Form Validation
    </script>


 <?php get_footer();
 ?>