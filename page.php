<?php get_header(); ?>

 <div id="getintouch">
        <!----------------- CONTACT FORM -------------------->
        <div class="" id="getintouchclosebtn" style="cursor: pointer; float: right; color: black;"><i class="fas fa-times fa-2x"></i></div>
        <form class="form-contact" method="get" action="#">
            <!-- <?php if(isset($result)){
                    if($result == TRUE){
                        echo '<p>Vasa poruka je uspesno poslata</p>';
                    }else{
                        echo '<p>Vasa poruka nije uspesno poslata</p>';
                    }}?> -->
            <div class="form-group">
                <label>Name*</label>
                <input name="W_name" value="" class="form-control">
                <div class="error"></div>
            </div>
            <div class="form-group">
                <label>Email*</label>
                <input name="W_email" value="" class="form-control">
                <div class="error"></div>
            </div>
            <div class="form-group">
                <label>Message*</label>
                <textarea name="W_message" value="" class="form-control"></textarea>
                <div class="error"></div>
            </div>

            <button type="submit" class="btn hvr-shutter-in-vertical" style="cursor: pointer; border-radius: 0;">Send</button>
        </form>
    </div>
    <div id="overlay">
    </div>








    <!---------- MAIN START ---------->
    <main>
        <div class="row" style="background: #b5db0a;">
            <!-- MAP -->
            <div class="col-12 px-0" style="border-bottom: 2px solid black;">
                <div id="map" style="width:100%; height:500px;">
                </div>
            </div>
            <!-- CONTACTS -->
            <div class="col-12 col-lg-11 m-auto" style="text-align: center;">
                <div class="row no-gutters justify-content-between admins">


                    <!-- SINGLE CONTACT -->
                    <div class="col-12 col-md-2 my-4 photozoom" style="border: 1px solid black; box-shadow: 0 0 25px black; background: #00013d; color: #f7f6d2;">
                        <figure class="m-0 p-0" style="border: 3px solid #00013d; box-shadow: inset 0 0 15px black; overflow: hidden; background: white;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/comment.png">
                        </figure>
                        <div class="px-2 pb-4" style="">
                            <h3 class="my-0">Andrey</h3>
                            <h4 class="my-0">Web designer & developer</h4>
                            <p class="my-0">+381-62-421-421</p>
                            <p class="my-0">andrey@gmail.com</p>
                            <div class="btn hvr-shutter-in-vertical mt-3" id="getintouchbtn" style="cursor: pointer; border-radius: 0;">Get in touch.</div>
                        </div>
                    </div>
                    <!-- SINGLE CONTACT END -->

                    <!-- SINGLE CONTACT -->
                    <div class="col-12 col-md-2 my-4 photozoom" style="border: 1px solid black; box-shadow: 0 0 25px black; background: #00013d; color: #f7f6d2;">
                        <figure class="m-0 p-0" style="border: 3px solid #00013d; box-shadow: inset 0 0 15px black; overflow: hidden; background: #f7f6d2;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/face_PNG11754.png">
                        </figure>
                        <div class="px-2 pb-4" style="background: #00013d;">
                            <h3 class="my-0">Sophia</h3>
                            <h4 class="my-0">Java script developer</h4>
                            <p class="my-0">+381-63-451-523</p>
                            <p class="my-0">sophia.sofi@gmail.com</p>
                            <div class="btn hvr-shutter-in-vertical mt-3" id="getintouchbtn2" style="cursor: pointer; border-radius: 0;">Get in touch.</div>
                        </div>
                    </div>
                    <!-- SINGLE CONTACT END -->

                    <!-- SINGLE CONTACT -->
                    <div class="col-12 col-md-2 my-4 photozoom" style="border: 1px solid black; box-shadow: 0 0 25px black; background: #00013d; color: #f7f6d2;">
                        <figure class="m-0 p-0" style="border: 3px solid #00013d; box-shadow: inset 0 0 15px black; overflow: hidden; background: #f7f6d2;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/comment1.jpg">
                        </figure>
                        <div class="px-2 pb-4" style="background: #00013d;">
                            <h3 class="my-0">Katherin</h3>
                            <h4 class="my-0">Photoshop</h4>
                            <p class="my-0">+381-61-4265-725</p>
                            <p class="my-0">katherinphotoshop@gmail.com</p>
                            <div class="btn hvr-shutter-in-vertical mt-3" id="getintouchbtn3" style="cursor: pointer; border-radius: 0;">Get in touch.</div>
                        </div>
                    </div>
                    <!-- SINGLE CONTACT END -->

                    <!-- SINGLE CONTACT -->
                    <div class="col-12 col-md-2 my-4 photozoom" style="border: 1px solid black; box-shadow: 0 0 25px black; background: #00013d; color: #f7f6d2;">
                        <figure class="m-0 p-0" style="border: 3px solid #00013d; box-shadow: inset 0 0 15px black; overflow: hidden; background: #f7f6d2;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/face_PNG5643.png">
                        </figure>
                        <div class="px-2 pb-4" style="background: #00013d;">
                            <h3 class="my-0">Danny</h3>
                            <h4 class="my-0">PHP, MySQL and APACHE Developer</h4>
                            <p class="my-0">+381-65-5364-745</p>
                            <p class="my-0">danny1977@gmail.com</p>
                            <div class="btn hvr-shutter-in-vertical mt-3" id="getintouchbtn4" style="cursor: pointer; border-radius: 0;">Get in touch.</div>
                        </div>
                    </div>
                    <!-- SINGLE CONTACT END -->


                </div>

            </div>
    </main>
    <!---------- MAIN END ---------->

<?php get_footer(); ?>