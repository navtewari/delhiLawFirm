<body>
    <!-- banner -->
    <div class="<?php if ($menu==1){echo 'banner';}else{echo 'banner1';}?>">
        <div class="<?php if ($menu==1){echo 'banner-layer';}else{echo 'banner-layer1';}?>">
            <div class="container">
                <div class="banner-logo">
                    <a href="#">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <h1>Yadav <span>Law Associates </span> </h1>
                    </a>
                </div>
            </div>

            <div class="agileits_w3layouts_menu">
                <div class="shy-menu">
                    <a class="shy-menu-hamburger">
                        <span class="layer top"></span>
                        <span class="layer mid"></span>
                        <span class="layer btm"></span>
                    </a>
                    <div class="shy-menu-panel">
                        <nav class="menu menu--horatio link-effect-8" id="link-effect-8">
                            <ul class="w3layouts_menu__list">
                                <li class="<?php if ($menu==1){echo 'active';}?>"><a href="<?PHP echo site_url('web/home'); ?>">Home</a></li>
                                <li class="<?php if ($menu==2){echo 'active';}?>"><a href="<?PHP echo site_url('web/firm'); ?>">The Firm</a></li>
                                <li class="<?php if ($menu==3){echo 'active';}?>"><a href="<?PHP echo site_url('web/team'); ?>">Our Team</a></li>
                                <li class="<?php if ($menu==4){echo 'active';}?>"><a href="<?PHP echo site_url('web/practiceArea'); ?>">Practice Areas</a></li>
                                <li class="<?php if ($menu==5){echo 'active';}?>"><a href="<?PHP echo site_url('web/whyus'); ?>">Why Choose us?</a></li> 
                                <li class="<?php if ($menu==6){echo 'active';}?>"><a href="<?PHP echo site_url('web/career'); ?>">Career</a></li>                                 
                                <li class="<?php if ($menu==7){echo 'active';}?>"><a href="<?PHP echo site_url('web/contact'); ?>">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <?php if ($menu==1){?>
            <div class="agile_banner_info">
                <div class="agile_banner_info1">
                    <div id="typed-strings" class="agileits_w3layouts_strings">
                        <p>Interpretation Through <i>Experiences</i></p>
                    </div>
                    <span id="typed" style="white-space:pre;"></span>
                </div>
            </div>
            <?php }?>
            <!--div class="banner_agile_para">
                <p>Interpretation Through Experiences</p>
            </div-->
            <div class="w3_agile_social_icons">
                <ul class="agileinfo_social_icons">
                    <li><a href="https://www.facebook.com/yadavlawassociates/" target="_blank" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://in.linkedin.com/in/yadav-law-associates-b79596121" target="_blank" class="w3_agileits_linkdin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/yadavlawasociat" target="_blank" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/115952482521140134297" target="_blank" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="https://join.skype.com/LaJPgApYhhp1" target="_blank" class="agileinfo_skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.slideshare.net/YadavLawAssociates" target="_blank" class="agileinfo_slideshare"><i class="fa fa-slideshare" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="thim-click-to-bottom">
                <a href="#services" class="scroll">
                    <div class="rotate">
                        <i class="fa  fa-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>