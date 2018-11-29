<div class="content">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Feed News</h4>
                    </div>
                    <div class="row"></div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo form_open_multipart('newsevents/updateNews/'.$record_->ID, array('name' => 'frmNewsEvents', 'id' => 'frmNewsEvents', 'role' => 'form')); ?>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'subject of News',
                                        'class' => 'required form-control',
                                        'name' => 'txtSubject',
                                        'id' => 'txtSubject',
                                        'value' => $record_->SUBJECT,
                                        'style' => 'color: #ff9000'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>News</label>
                                    <?php
                                    $data = array(
                                        'rows' => '3',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'News',
                                        'class' => 'required form-control',
                                        'name' => 'txtNews',
                                        'id' => 'txtNews',
                                        'value' => $record_->NEWS,
                                        'style' => 'color: #ff9000'
                                    );
                                    echo form_textarea($data);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>File input <span style="font-size: 11px; color: #808080; font-weight: normal; font-style: italic">Only <b>[ .doc| .docx| .pdf| .jpg| .png ]</b> are allowed</span></label>
                                    <?php
                                    $data = array(
                                        'type' => 'file',
                                        'autocomplete' => 'off',
                                        'class' => 'required form-control',
                                        'name' => 'txtInputFile',
                                        'id' => 'txtInputFile',
                                        'value' => '',
                                        'style' => 'color: #ff9000'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group">
                                <button type="submit" class="col-md-3 form-group btn btn-danger btn-fill pull-left"> Update </button>
                                </div>
                                <div class="form-group" style="padding: 4px; float: left"></div>
                                <div class="form-group">
                                <div style="color: #ff0000; font-size: 12px; font-weight: bold; font-style: italic; padding: 10px 0px 0px 0px; float: right"><?php echo $this->session->flashdata('feed_msg_'); ?></div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?php $this->load->view('news/viewactivenews.php'); ?>
                </div>
                <div class="col-md-6">
                    <?php $this->load->view('news/deactivatednews.php'); ?>
                </div>
            </div>
        </div>
    </div>