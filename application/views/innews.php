<div class="legal">
    <div class="container">
        <div class="col-md-12 single-left">
            <div class="whomtop">
                <h4>Yadav Law Associates</h4>
                <h3 class="tittle">in News</h3>                
            </div>
        </div>
        <div class="col-md-12 single-left">
            <?php
            foreach ($files as $item) {
                if ($item->PATH_ != 'no-image.png') {
                    ?>
            <div class="col-md-4 gridleft" style="height:410px;">
                        <div class="w3read">
                            <a href="<?php echo base_url('admin/assets/newspaper/' . $item->PATH_); ?>" target="_blank">Download</a>
                        </div>
                        <embed src="<?php echo base_url('admin/assets/newspaper/' . $item->PATH_); ?>" width="auto" height="300px;" />     
                        <?php if($item->URL_ !=''){?>
                        <p align="left">SRC- <a href="<?php echo $item->URL_?>" target="_blank"><?php echo $item->URL_?></a></p>
                        <?php }?>
                    </div>  
                <?php }
            } ?>
        </div>               
        <div class="clearfix"></div>
    </div>
</div>