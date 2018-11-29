<body>    <!--/services-->
    <div class="banner1">
        <div class="banner-layer1">
            <div class="container">
                <div class="banner-logo">
                    <a href="#">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <h1>Yadav <span>Law Associates </span> </h1>
                    </a>
                </div>
            </div>   
            <div class="w3_agile_social_icons">
                <ul class="agileinfo_social_icons">
                    <li><a href="https://www.facebook.com/yadavlawassociates/" target="_blank" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="www.linkedin.com/in/yadav-law-associates-b79596121" target="_blank" class="w3_agileits_linkdin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/social92611921" target="_blank" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/112334232128678459234" target="_blank" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="https://join.skype.com/LaJPgApYhhp1" target="_blank" class="agileinfo_skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.slideshare.net/YadavLawAssociates" target="_blank" class="agileinfo_slideshare"><i class="fa fa-slideshare" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="services" style="margin-top:2.5em;">
        <div class="container">
            <h3 class="tittle" style="margin-bottom: 0px;">Disclaimer</h3>            
            <div class="col-sm-12 grid1" align="center">                   
                <div class="col-sm-12 gridinfo" style="margin-bottom: .8em;">
                    <p align="justify" style="font-size: 12px;">As per the rules of the Bar Council of India, we are not permitted to solicit work and advertise. Please acknowledge : That there has been no advertisement, personal communication, solicitation, invitation or inducement of any sort whatsoever from us or any of our members to solicit any work through this website; the user wishes to gain more information about us for his/her own information and use; the information about us is provided to the user only on his/her specific request and any information obtained or materials downloaded from this website is completely at the user’s volition and any transmission, receipt or use of this site would not create any lawyer-client relationship. The information provided under this website is solely available at your request for informational purposes only, should not be interpreted as soliciting or advisement. We are not liable for any consequence of any action taken by the user relying on material/information provided under this website. In cases where the user has any legal issues, he/she in all cases must seek independent legal advice.</p>
                </div>
                <?php if ($this->session->flashdata('_msg_q')) { ?>
                    <div class="row">
                        <div class="alert alert-danger col-sm-11" role="alert">
                            <strong>Warning!</strong> <?php echo $this->session->flashdata('_msg_q'); ?>
                        </div>
                        <div class="col-sm-12">
                            &nbsp;
                        </div>
                    </div>
                <?php } ?>                                                                   
                <form method="post" action="<?php echo site_url('web'); ?>" class="form-inline">
                    <div class="col-sm-12" style="margin-bottom: 1.5em;">
                            <p style="color: #0976b4">If you agree, then type the word you see below:</p>        
                        </div>
                    <div class="form-group">
                        <p id="captImg" style="max-width: 200px;"><?php echo $captchaImg; ?></p>                        
                    </div>
                    <div class="form-group">                         
                            <a href="javascript:void(0);" class="refreshCaptcha" >
                                <img src="<?php echo base_url() . 'assets_/images/refresh.png'; ?>" style="width:20px;"/></a>                        
                    </div>
                    <div class="form-group">
                        <input type="text" name="captcha" value="" class="form-control" style="width:200px;"/><br>
                    </div>
                    <div class="checkbox">                       
                    </div>
                    <input type="submit" name="submit" value="Enter Site" class="btn btn-primary"/>
                </form>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//services-->
    <script type="text/javascript" src="<?php echo base_url('assets_/js/jquery-2.1.4.min.js'); ?>"></script>

    <script>
        $(document).ready(function () {
            $('.refreshCaptcha').on('click', function () {
                $.ajax({
                    url: site_url_ + "/web/refresh",
                    type: 'GET',
                }).done(function (data) {
                    $('#captImg').html(data);
                });
            });
        });
    </script>