<?php 

/**
 * Template Name: Register Template
 */ 
 

get_header(); ?>


<!---------- MAIN START ---------->
<main>
        <div class="row">
            <div class="col-12 col-lg-9" style="background: #b5db0a;">
                <!-- Button Trigger for menu on smartphones -->

                <!-- ROW NUMBER 1 -->
                <div class="row no-gutters p-5 justify-content-between">
                    <div class="col-12 col-lg-5 pr-4" style="border-right: 2px solid black;">
                        <h2>Terms and Conditions and Privacy Policy</h2>
                        <p>BY CLICKING “I ACCEPT” OR OTHERWISE ACCESSING OR USING ANY OF THE SERVICES (INCLUDING THE LICENSES, PUBLIC DOMAIN TOOLS, AND CHOOSERS), YOU ACKNOWLEDGE THAT YOU HAVE READ, UNDERSTOOD, AND AGREED TO BE BOUND BY THE TERMS. By clicking
                            “I ACCEPT” or otherwise accessing or using any Services you also represent that you have the legal authority to accept the Terms on behalf of yourself and any party you represent in connection with your use of any Services.
                            If you do not agree to the Terms, you are not authorized to use any Services. If you are an individual who is entering into these Terms on behalf of an entity, you represent and warrant that you have the power to bind that
                            entity, and you hereby agree on that entity’s behalf to be bound by these Terms, with the terms “you,” and “your” applying to you, that entity, and other users accessing the Services on behalf of that entity.</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!----------------- CONTACT FORM -------------------->
                        <form class="form-contact" method="post" action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input name="W_firstname" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input name="W_lastname" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Username*</label>
                                <input name="W_username" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="W_email" value="" class="form-control">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input name="W_password" type="password" value="" class="form-control" id="password">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label>Repeat Password*</label>
                                <input name="W_password" type="password" name="confirm_password" value="" class="form-control" id="confirm_password">
                                <div class="error"></div>
                            </div>
                            <div class="mainselection">
                                <select class="w3-select" name="option">
                                    <option value="" disabled selected>Choose your country</option>
                                   
	                                <option value="AR">Argentina</option>
	                                <option value="CA">Canada</option>
	                                <option value="CL">Chile</option>
	                                <option value="CN">China</option>
	                                <option value="HR">Croatia</option>
	                                <option value="CZ">Czech Republic</option>
	                                <option value="DK">Denmark</option>
	                                <option value="FR">France</option>
	                                <option value="DE">Germany</option>
	                                <option value="GR">Greece</option>
	                                <option value="IN">India</option>
	                                <option value="IT">Italy</option>
	                                <option value="JP">Japan</option>
	                                <option value="KR">Korea, Republic of</option>
	                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
	                                <option value="MX">Mexico</option>
	                                <option value="NL">Netherlands</option>
	                                <option value="NO">Norway</option>
	                                <option value="PL">Poland</option>
	                                <option value="PT">Portugal</option>
	                                <option value="RU">Russian Federation</option>
	                                <option value="SA">Saudi Arabia</option>
	                                <option value="SN">Senegal</option>
	                                <option value="RS">Serbia</option>
	                                <option value="SK">Slovakia</option>
	                                <option value="SI">Slovenia</option>
	                                <option value="ZA">South Africa</option>
	                                <option value="ES">Spain</option>
	                                <option value="SE">Sweden</option>
	                                <option value="CH">Switzerland</option>
	                                <option value="TH">Thailand</option>
	                                <option value="TR">Turkey</option>
	                                <option value="UA">Ukraine</option>
	                                <option value="GB">United Kingdom</option>
	                                <option value="US">United States</option>
	                                <option value="UY">Uruguay</option>
                                </select>
                            </div>


                            <input type="checkbox" name="checkbox" value="check" id="agree" class="mt-4" /></span> I have read and agree to the Terms and Conditions and Privacy Policy<br><br>


                            <button type="submit" class="btn hvr-shutter-in-vertical" style="cursor: pointer; border-radius: 0;">SUBMIT</button>
                            <a href="login.html" class="btn hvr-shutter-in-vertical" style="cursor: pointer; border-radius: 0;">Already a member? Log in.</a>
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


    <script>
        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    </script>
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
                        W_firstname: {
                            required: true,
                            rangelength: [3, 15]
                        },
                        W_lastname: {
                            required: true,
                            rangelength: [3, 15]
                        },
                        W_username: {
                            required: true,
                            rangelength: [6, 20]
                        },
                        W_email: {
                            required: true,
                            rangelength: [5, 20],
                            email: true
                        },
                        W_password: {
                            required: true,
                            rangelength: [5, 20]
                        }
                    },
                    messages: {
                        W_firstname: {
                            required: "The *First Name field is required!",
                            rangelength: "The *Name must be between 3 and 15 characters!"
                        },
                        W_lastname: {
                            required: "The *Last Name field is required!",
                            rangelength: "The *Name must be between 3 and 15 characters!"
                        },
                        W_username: {
                            required: "The *Username field is required!",
                            rangelength: "The *Name must be between 6 and 20 characters!"
                        },
                        W_email: {
                            required: "The *Email field is required!",
                            rangelength: "The *Email must be between 5 and 20 characters!",
                            email: "Please enter a valid email addres!"
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