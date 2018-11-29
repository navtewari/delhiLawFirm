<div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/img/sidebar-5.jpg');?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Yadav's
                </a>
            </div>

            <ul class="nav">
                <!--li<?php echo $dashboard; ?>>
                    <a href="<?php echo site_url('admin/dashboard');?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li-->
                <li<?php echo $member; ?>>
                    <a href="<?php echo site_url('admin/member');?>">
                        <i class="pe-7s-user"></i>
                        <p>Member's Profile</p>
                    </a>
                </li>
                <li<?php echo $news; ?>>
                    <a href="<?php echo site_url('newsevents');?>">
                        <i class="pe-7s-note2"></i>
                        <p>News</p>
                    </a>
                </li>
                <li<?php echo $pdf; ?>>
                    <a href="<?php echo site_url('pdf_uploads');?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Upload Files</p>
                    </a>
                </li>
                <!--li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li-->
            </ul>
    	</div>
    </div>