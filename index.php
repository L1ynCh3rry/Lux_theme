<?php 
get_header();
?>


<!---------- MAIN START ---------->
<main>
        <div class="row">
            <div class="col-12 col-lg-9" style="background: #b5db0a;">

                <!-- ROW NUMBER 1 -->
                <div class="row bottom-line justify-content-around">
                    <div class="col-6 col-lg-3">
                        <figure class="mainfigure my-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/main.jpg" alt="Dogs picture">
                        </figure>
                    </div>
                    <div class="col-12 col-lg-9">
                        <h1>Dogs</h1>
                        <p>
                            The domestic dog (Canis lupus familiaris or Canis familiaris) is a member of the genus Canis (canines), which forms part of the wolf-like canids, and is the most widely abundant terrestrial carnivore. The dog and the extant gray wolf are sister taxa as
                            modern wolves are not closely related to the wolves that were first domesticated, which implies that the direct ancestor of the dog is extinct. The dog was the first species to be domesticated and has been selectively bred
                            over millennia for various behaviors, sensory capabilities, and physical attributes.
                        </p>
                    </div>
                </div>
                <!-- ROW NUMBER 2 -->
                <div class="row bottom-line justify-content-around">
                    <div class="col-12 col-lg-9">
                        <h2>Etymology</h2>
                        <p>The term "domestic dog" is generally used for both domesticated and feral varieties. The English word dog comes from Middle English dogge, from Old English docga, a "powerful dog breed". The term may possibly derive from Proto-Germanic
                            *dukkōn, represented in Old English finger-docce ("finger-muscle"). The word also shows the familiar petname diminutive -ga also seen in frogga "frog", picga "pig", stagga "stag", wicga "beetle, worm", among others. Piotr Gąsiorowski
                            has suggested that Old English *docga is actually derived from Old English colour adjective dox.</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <figure class="mainfigure my-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Cutest-dog-breeds-main.jpg" alt="Puppy picture">
                        </figure>
                    </div>
                </div>
                <!-- ROW NUMBER 3 -->
                <div class="row justify-content-around bottom-line pb-3">
                    <div class="col-12 col-lg-10">
                        <div class="w3-content w3-display-container d-flex justify-content-center" style="text-align: center; width: 100%; overflow: hidden; background: black; margin-top: 15px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.01);">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/landscape-1486985094-dog.jpg" style="max-width:100%; max-height: 100%;">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/dogs-to-follow-on-instagram.png" style="max-width:100%; max-height: 100%;">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/A-puppy-with-a-toy.jpg" style="max-width:100%; max-height: 100%;">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/puppy-dog-eyes.jpg" style="max-width:100%; max-height: 100%;">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/vetstreet.brightspotcdn.com.jpg" style="max-width:100%; max-height: 100%;">
                            <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/img/ol9ceoqxidudap8owlwn.jpg" style="max-width:100%; max-height: 100%;">
                            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="background: rgba(0,0,0,0.7); width: 30px; height: 30px;">&#10094;</div>
                                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" style="background: rgba(0,0,0,0.7); width: 30px; height: 30px;">&#10095;</div>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
                                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
                            </div>
                        </div>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/dog-snow.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">Grit used on roads during snowy weather can be dangerous for pets.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">Gritters are out in full force this week as the UK is faced with sub-zero temperatures at the hands of the Beast from the East and Storm Emma.</p>
                            <a href="single.html" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 2 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/dog-walk.jpg">
                            </figure>
                            <h3 style="background: #b5db0a; color: black; border-bottom: 0.5px solid black;" class="m-0 py-2 newsh3hover">The average dog owner walks their pet 1,000 miles in a year.</h3>
                            <p style="color: black; text-align: justify;" class="px-2">Dog owners trek more than 1,000 miles, play 2,080 rounds of fetch – and call their pet’s name 3,120 times while walking them each year, a study has found.</p>
                            <a href="single.html" class="readmore">Read more</a>
                        </div>

                        <!-- NEWS 3 -->
                        <div class="col-11 mb-3 newshover photozoom" style="border: 0.5px solid black; text-align: center; background: #f7f6d2; cursor: pointer;">
                            <figure style="max-width: 100%; max-height: 100%; overflow: hidden;">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-dog.jpg">
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

<script>
        // SLIDE SHOW
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>


<?php 
get_footer();
?>