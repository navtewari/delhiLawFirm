<!-- footer top -->
<div class="phone1">
    <div class="border">
        <p>Any legal problem?</p>
        <h3>Call Us : +011 41511881</h3>
        <p>24*7 dedicated landline</p>
    </div>
    <div class="phone">
        <i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>
    </div>
</div>
<!-- //footer top -->

<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-5 footer-grid address">
                    <h3>Contact us</h3>
                    <h4>India</h4>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Yadav law Associates, <span>Delhi.</span></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 91-9266130562, 91-8383002256</li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 91-8860763621, 91-8851194938</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:contact@yadavlawassociates.com">contact@yadavlawassociates.com</a></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@yadavlawassociates.com">info@yadavlawassociates.com</a></li>
                        <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon to Fri : 10am to 6 pm</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h3>Quick links</h3>
                    <ul>
                        <li> <a href="<?PHP echo site_url('web/firm'); ?>">About Us</a> </li>
                        <li> <a href="<?PHP echo site_url('web/practiceArea'); ?>">Practice Areas</a> </li>
                        <li> <a href="<?PHP echo site_url('web/career'); ?>">Careers</a> </li>
                        <li> <a href="<?PHP echo site_url('web/team'); ?>">Our Team</a> </li>
                        <li> <a href="<?PHP echo site_url('web/whyus'); ?>">Why Choose us?</a> </li>
                        <li> <a href="http://yadavlawassociates.com/Blog/" target="_blank">Blog</a> </li>
                        <li> <a href="<?PHP echo site_url('web/contact'); ?>">Contact Us</a> </li>
                    </ul>
                </div>                        
                <div class="col-md-4 agile-footer-grid">
                    <h3>Why Choose us?</h3>
                    <p align="justify">Our Firm has broad and diverse trial practices and is viewed as the leading litigation and trial firm in India. Our attorneys appear extensively in High Courts and District Courts all over India. The wide-ranging courtroom, trial experience and... </p>
                    <div class="subscribe-grid">
                        <div class="w3read" style="float: right; margin-top: -.05em;">
                            <a href="<?PHP echo site_url('web/whyus'); ?>">Know More</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="w3_agile_social_icons" style="margin-top: 3em;">
                        <ul class="agileinfo_social_icons">
                            <li><a href="https://www.facebook.com/yadavlawassociates/" target="_blank" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://in.linkedin.com/in/yadav-law-associates-b79596121" target="_blank" class="w3_agileits_linkdin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/yadavlawasociat" target="_blank" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://plus.google.com/115952482521140134297" target="_blank" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="https://join.skype.com/LaJPgApYhhp1" target="_blank" class="agileinfo_skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.slideshare.net/YadavLawAssociates" target="_blank" class="agileinfo_slideshare"><i class="fa fa-slideshare" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="wthree_copy_right">
    <div class="banner-logo">
        <a href="#">
            <i class="fa fa-balance-scale" aria-hidden="true"></i>
            <h2>Yadav <span>Law Associates</span> </h2>
        </a>
    </div>
    <div class="container">
        <p>&copy; 2018 Yadav Law Associate. All rights reserved | Design by <a href="http://teamfreelancers.com" target='_blank'>Teamfreelancers.com</a></p>

    </div>
</div>
<!-- //copyright -->

<!-- js -->
<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery-2.1.4.min.js'); ?>"></script>
<!-- for bootstrap working -->
<script src="<?php echo base_url('assets_/js/bootstrap.js'); ?>"></script>
<!-- //for bootstrap working -->
<!-- //js -->

<!-- banner-type-text -->
<script src="<?php echo base_url('assets_/js/typed.js'); ?>" type="text/javascript"></script>
<script>
    $(function () {

        $("#typed").typed({
// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
// defaults to false for infinite loop
            loopCount: false,
            callback: function () {
                foo();
            },
            resetCallback: function () {
                newTyped();
            }
        });

        $(".reset").click(function () {
            $("#typed").typed('reset');
        });

    });

    function newTyped() { /* A new typed object */
    }

    function foo() {
        console.log("Callback");
    }
</script>
<!-- //banner-type-text -->

<!-- menu -->
<script>
    $(function () {

        initDropDowns($("div.shy-menu"));

    });

    function initDropDowns(allMenus) {

        allMenus.children(".shy-menu-hamburger").on("click", function () {

            var thisTrigger = jQuery(this),
                    thisMenu = thisTrigger.parent(),
                    thisPanel = thisTrigger.next();

            if (thisMenu.hasClass("is-open")) {

                thisMenu.removeClass("is-open");

            } else {

                allMenus.removeClass("is-open");
                thisMenu.addClass("is-open");
                thisPanel.on("click", function (e) {
                    e.stopPropagation();
                });
            }

            return false;
        });
    }
</script>
<!-- //menu -->

<!-- testimonials required-js-files-->
<link href="<?php echo base_url('assets_/css/owl.carousel.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets_/js/owl.carousel.js'); ?>"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 1,
            lazyLoad: true,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
</script>
<!--// testimonials required-js-files-->

<!-- here starts scrolling icon -->
<script src="<?php echo base_url('assets_/js/SmoothScroll.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets_/js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets_/js/easing.js'); ?>"></script>
<!-- here stars scrolling script -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script> 

<!-- //scrolling script -->
<script src="<?PHP echo base_url() . 'assets_/js/jquery.easing.min.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'assets_/js/jquery.easy-ticker.js'; ?>"></script>   
<script type="text/javascript">
    $(document).ready(function () {

        var dd = $('.vticker').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 5000,
            height: 'auto',
            visible: 3,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');


        $('.vis').click(function () {
            dd.options['visible'] = 3;

        });

        $('.visall').click(function () {
            dd.stop();
            dd.options['visible'] = 0;
            dd.start();
        });

    });
</script>

</body>
</html>