<!---------- FOOTER START ---------->
<footer>
        <div class="row justify-content-between">
            <div class="col-12 col-lg-4 ls">
                <span style="color: black;" class="fab fa-phoenix-framework fa-2x"></span>
                <a class="visitus" href="https://cubes.edu.rs/">Visit our course page</a>
            </div>
            <div class="col-12 col-lg-5 text-center">
                <div class="row social justify-content-between no-gutters">
                    <div class="col-2">
                        <a href="#">
                            <span class="fab fa-google-plus-g fa-lg"></span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="#">
                            <span class="fab fa-facebook-f fa-lg"></span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="#">
                            <span class="fab fa-twitter fa-lg"></span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="#">
                            <span class="fab fa-viber fa-lg"></span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a href="#">
                            <span class="fab fa-skype fa-lg"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!---------- FOOTER END ---------->






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/poper.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
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
                        W_name: {
                            required: true,
                            rangelength: [3, 255]
                        },
                        W_email: {
                            required: true,
                            rangelength: [5, 255],
                            email: true
                        },
                        W_message: {
                            required: true,
                            rangelength: [10, 255]
                        }

                    },
                    messages: {
                        W_name: {
                            required: "The *Name field is required!",
                            rangelength: "The *Name must be between 3 and 255 characters!"
                        },
                        W_email: {
                            required: "The *Email field is required!",
                            rangelength: "The *Email must be between 5 and 255 characters!",
                            email: "Please enter a valid email addres!"
                        },
                        W_message: {
                            required: "The *Message field is required!",
                            rangelength: "The *Message must be between 10 and 255 characters!",
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
</body>

</html>