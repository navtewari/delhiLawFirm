<style>
    .fill {
        width: 280px;
        height: 280px;    
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50% 50%;
    }
</style>
<div class="legal" style="margin-bottom: -4em;">
    <div class="container">
        <div class="col-md-7 single-left">
            <div class="whomtop">
                <h4>Yadav Law Associates</h4>
                <h3 class="tittle">Our Team</h3>                
            </div>                               
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
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile" style='min-height:475px;'>
                                <div class="fill" style="background-image: url('<?php echo base_url('admin/assets/memberpics/' . $item->PHOTO_); ?>')"></div>
                                <h1><?php echo $item->NAME_ ?></h1>
                                <h2><?php echo $item->EXPERT_AREA ?></h2>
                                <p><a href="<?PHP echo site_url('web/memberDetail/' . $item->MID); ?>"><i class="fa fa-user" aria-hidden="true"></i> View Profile</a></p>
                                <p><a href="mailto:<?php echo $item->EMAIL_ ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $item->EMAIL_ ?></a></p>                           
                                <p><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $item->CONTACT_DETAIL ?></a></p>
                            </div>
                        <?php } ?>                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>