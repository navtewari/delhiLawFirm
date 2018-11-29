<div class="wrapper">
        <?php $this->load->view('templates/sidemenu'); ?>

    <div class="main-panel">
        <?php $this->load->view('templates/navbar'); ?>
        <?php $this->load->view($folder.'/'.$page); ?>
        <?php $this->load->view('templates/subfooter.php'); ?>

    </div>
</div>