<div class="legal" style="margin-bottom: -4em;">
    <div class="container">
        <div class="col-md-7 single-left">
            <div class="whomtop">
                <h4>Yadav Law Associates</h4>
                <h3 class="tittle">Our Team Member</h3>                
            </div>                               
        </div> 
        <div class="w3read" style="float:right">
            <a href="<?PHP echo site_url('web/team'); ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> See More Members</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-lg-12">                  
                    <div class="row pt-md">
                        <?php foreach ($team as $item) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="<?php echo base_url('admin/assets/memberpics/' . $item->PHOTO_); ?>" alt="" class="img-responsive"/>                               
                                </div>
                                <p>&nbsp;</p>
                                <p><a href="mailto:<?php echo $item->EMAIL_ ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $item->EMAIL_ ?></a></p>                           
                                <p><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $item->CONTACT_DETAIL ?></a></p>
                                <?php if ($item->CV_ != 'no-file') { ?>
                                    <p><a href="<?php echo base_url('admin/assets/membercv/' . $item->CV_); ?>"><i class="fa fa-download" aria-hidden="true"></i> Download CV</a></p>
                                <?php } ?>                                                                
                            </div>                        

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 profile1">                            
                                <h1><?php echo $item->NAME_ ?></h1>
                                <h2><?php echo $item->EXPERT_AREA ?></h2>                            
                                <h2><b>Experience:</b> <?php echo $item->EXPERIENCE ?></h2>   
                                <p><?php echo $item->BRIEF_DESC_ ?></p>
                            </div>                        
                        <?php } ?>   
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>