<div class="col-md-4 event-right wthree-event-right">
    <div class="event-right1 agileinfo-event-right1">                
        <div class="categories w3ls-categories">
            <h3>In News</h3>
            <?php foreach($files as $item){?>
            <embed src="<?php echo base_url('admin/assets/newspaper/'.$item->PATH_); ?>" width="auto" height="480px;" />
            <div class="w3read" style="float:right;">
                <a href="<?PHP echo site_url('web/innews'); ?>">More</a>
            </div>
            <?php } ?>
        </div>

        <div class="categories w3ls-categories" style="margin-top: 4em;">
            <h3>Practice Areas</h3>
            <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/1'); ?>">LITIGATION</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/2'); ?>">IP SOLUTIONS FOR CORPORATES</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/3'); ?>">ARBITRATION</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/4'); ?>">SEARCH AND ANALYTICS</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/5'); ?>">CIVIL LAW</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/6'); ?>">CORPORATE LAW</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/7'); ?>">CONSUMER PROTECTION</a></li>                
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="<?PHP echo site_url('web/practiceDetail/8'); ?>">INTER COUNTRY ADOPTIONS</a></li>                
            </ul>
            <div class="w3read" style="float:right;">
                <a href="<?PHP echo site_url('web/practiceDetail/9'); ?>">More</a>
            </div>
        </div>
    </div>
</div>