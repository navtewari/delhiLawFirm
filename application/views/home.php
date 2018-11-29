<style>
    .vticker{
        // border: 1px solid red;
        background: #fff;
        margin-top: 15px;
        width: auto;
    }
    .vticker ul{
        padding:0;
        width:auto;
    }
    .vticker li{
        list-style: none;
        border-bottom: 1px dotted #e3e3e3;
        padding: 10px;
        margin-bottom: 30px;
    }
    .et-run{
        background: red;
    }
</style>
<!-- //banner -->	

<!--/services-->
<div id="services" class="services">
    <div class="container">            
        <div class="legaltopgrids">
            <div class="col-md-7 grid1">
                <h3 class="tittle">Our Firm</h3>                    
                <div class="col-md-12 gridinfo">
                    <p align="justify">At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.  Our attorneys maintain integrity and expertise to earn long-term, trusting relationships with our clients and the communities in which we live and work. </p>
                    <p align="justify">At Yadav Law Associates, providing workable advice and cost effective assistance to our clients is our foremost aim. The clients benefit from our approach of viewing issues from both a business as well as a legal perspective; focusing on problem avoidance, not just problem solving. With a sophisticated understanding of changing business environment intersecting with law, public policy and technology, the Firm is positioned to protect and advance its clients’ business interests in the present era of globalization.</p>
                </div>

                <div class="clearfix"></div>
                <div class="w3read">
                    <a href="<?PHP echo site_url('web/firm'); ?>">Read More</a>
                </div>
            </div> 

            <div class="col-md-5 grid1">
                <h3 class="tittle">News/Updates</h3>                    
                <div class="col-md-12 gridinfo" style="background: #f2f2f2; padding: 15px;">
                    <div class="vticker">
                        <ul>
                            <?php foreach ($news as $item) { ?>
                                <li>                                                                    
                                    <h4><?php echo $item->SUBJECT ?>                                         
                                    </h4>
                                    <p>
                                    <?php if ($item->PATH_ATTACH != 'x') { ?>
                                    <a href="<?PHP echo base_url() . 'admin/assets/newsdetail/' . $item->PATH_ATTACH; ?>"><i class="fa fa-download" aria-hidden="true" style="float:left;margin:.3em;"></i></a>
                                    <?php } ?>  
                                    <?php echo $item->NEWS ?>
                                    </p>                                    
                                </li>

                            <?php } ?>
                        </ul>
                    </div>
                    <div style="float:right; margin-top:10px;">
                        <button class="btn btn-primary up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                        <button class="btn btn-primary down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                    </div>
                </div>                                        
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>            
    </div>
</div>
<!--//services-->

<!-- our lawyers 
<div class=" lawyers agileits-w3layouts-specials" id="lawyers">
    <div class="container">
        <h3 class="tittle">Our Team</h3>
        <div class="special-grids">
            <div class="col-md-6 lawyer1 special-left l-grids">
                <figure class="effect-bubba">
                    <img src="<?php echo base_url('assets_/images/rohit.jpg'); ?>" alt=""/>
                    <figcaption>
                        <h4>Rohit Yadav</h4>												
                    </figcaption>			
                </figure>
                <h4 class="name">Managing Partner</h4>
            </div>
            <div class="col-md-6 lawyer1 special-left l-grids">
                <figure class="effect-bubba">
                    <img src="<?php echo base_url('assets_/images/mohit.jpg'); ?>" alt=""/>
                    <figcaption>
                        <h4>Mohit Yadav</h4>												
                    </figcaption>			
                </figure>
                <h4 class="name">Lead IP Counsel</h4>
            </div>            
            <div class="clearfix"></div>                
        </div>            
    </div>
</div>
<!-- //our lawyers -->

<!-- Specialization -->
<div class="home_ w3layouts">    
    <div class="home_grids_w3">      
        <h3 class="tittle">Our Specialized Practice Areas</h3>   
        <div class="home_main">
            <div class="col-md-6 col-sm-6 col-xs-6 img1 img-grid">
                <div class="img_text_w3ls">
                    <h4>LITIGATION</h4>
                    <span> </span>                        
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/1'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 img2 col-sm-6 col-xs-6 img-grid">
                <div class="img_text_w3ls">
                    <h4>IP SOLUTIONS FOR CORPORATES</h4>
                    <span> </span>                        
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/2'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="home_main">
            <div class="col-md-6 col-sm-6 col-xs-6 img6 img-grid ">
                <div class="img_text_w3ls">
                    <h4>ARBITRATION</h4>
                    <span> </span>                        
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/3'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 img4 img-grid">
                <div class="img_text_w3ls">
                    <h4>SEARCH AND ANALYTICS</h4>
                    <span> </span>                        
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/4'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="home_main">
            <div class="col-md-6 col-sm-6 col-xs-6 img-grid  img5">
                <div class="img_text_w3ls">
                    <h4>CIVIL LAW</h4>
                    <span> </span>                     
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/5'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 img-grid img1">
                <div class="img_text_w3ls">
                    <h4>CORPORATE LAW</h4>
                    <span> </span>                       
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/6'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="home_main">
            <div class="col-md-6 col-sm-6 col-xs-6 img7 img-grid ">
                <div class="img_text_w3ls">
                    <h4>CONSUMER PROTECTION</h4>
                    <span> </span>                       
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/7'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 img4 img-grid">
                <div class="img_text_w3ls">
                    <h4>INTER COUNTRY ADOPTIONS</h4>
                    <span> </span>                       
                    <div class="w3read">
                        <a href="<?PHP echo site_url('web/practiceDetail/8'); ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="w3read" style="float:right">
                <a href="<?PHP echo site_url('web/practiceDetail/9'); ?>">More Legal Practices</a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //Specialization -->

<!--/reviews-->
<div id="testimonials" class="testimonials" style="margin-top:3em;">
    <div class="container">
        <h3 class="tittle">Testimonials</h3>
        <div class="test-monials">
            <!--//screen-gallery-->
            <div class="sreen-gallery-cursual">
                <div id="owl-demo" class="owl-carousel">
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/us.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>The quality of standards provided by Yadav law Associates and word to word mapping is quite helpful for making IPR declarations</p>
                                <h5>Chief IP officer, Telecommunications Company, USA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/uk.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>I am an NRI and it is difficult for me to release my father’s assets from bank on my name. However, I approached Yadav law Associates referred by my brother and it’s my pleasant experience to get rid of the distinctive banking rules in India with their legal expertise</p>
                                <h5>Citizen Of UK</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/europe.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>The Non patent prior art provided by Yadav Law Associates, is prominent and effective as per the requirements, they have an in-depth technical understanding</p>
                                <h5>European Patent Attorney</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/canada.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>Yadav Law Associates have efficient immigration attorneys under one roof for initiating and concluding the process of Canadian PR</p>
                                <h5>Abdul Aleem Yousofzai</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/us.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>Yadav Law Associates had done a good job on several projects and having a good knowledge in the field of patents and Technology.</p>
                                <h5>IP company, California, U.S.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="<?php echo base_url('assets_/images/us.jpg'); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="textagile">
                                <p>Yadav Law Associates is a leading law firm providing complete solution for inter-country adoptions</p>
                                <h5>US, Citizen</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//screen-gallery-->
            </div>
        </div>
    </div>
</div>
<!--//reviews-->    