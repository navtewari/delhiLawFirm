<style type="text/css">
    sup{
        padding: 3px;
        color: #ff0000;
        font-weight: bold;
    }
</style>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Manage Members</h4>
                            </div>
                            <div class="row"></div>
                            <div class="content">
                                <?php
                                    $data = array(
                                        'name' => 'frmMemberProfile', 
                                        'id' => 'frmMemberProfile', 
                                        'role' => 'form', 
                                        'class' => 'form-group'
                                        );
                                    echo form_open_multipart('#', $data);
                                ?>
                                    <input type="hidden" value="new" name="condition_" id="condition_" />
                                    <input type="hidden" value="no_id" name="MID_modify" id="MID_modify" />
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Full Name<sup>*</sup></label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'placeholder' => 'Full Name',
                                                                'class' => 'form-control changecolor',
                                                                'required' => 'required',
                                                                'name' => 'txtName_',
                                                                'id' => 'txtName_',
                                                                'value' => '',
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Upload Photo <span style='font-size: 9px; color: #0000ff'>&nbsp;<b>MAX 200KB</b> and only <b>jpg | png</b> allowed</span></label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'file',
                                                                'placeholder' => 'Upload Photo',
                                                                'class' => 'required form-control changecolor',
                                                                'name' => 'txtPhoto',
                                                                'id' => 'txtPhoto',
                                                                'value' => '',
                                                                'class'=>"form-control"
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Expert Area/ Designation</label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'placeholder' => 'Expert Area',
                                                                'class' => 'form-control changecolor',
                                                                'name' => 'txtExpertArea',
                                                                'id' => 'txtExpertArea',
                                                                'value' => '',
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Experience</label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'placeholder' => 'Experience',
                                                                'class' => 'form-control changecolor',
                                                                'name' => 'txtExperience',
                                                                'id' => 'txtExperience',
                                                                'value' => '',
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Contact<sup>*</sup></label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'placeholder' => 'Contact',
                                                                'class' => 'form-control changecolor',
                                                                'required' => 'required',
                                                                'name' => 'txtContact',
                                                                'id' => 'txtContact',
                                                                'value' => '',
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'email',
                                                                'placeholder' => 'Email',
                                                                'class' => 'form-control changecolor',
                                                                'name' => 'txtEmail',
                                                                'id' => 'txtEmail',
                                                                'value' => '',
                                                            );
                                                            echo form_input($data);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Brief Description</label>
                                                        <?php
                                                            $data = array(
                                                                'type' => 'email',
                                                                'placeholder' => 'Brief Description',
                                                                'class' => 'form-control changecolor',
                                                                'name' => 'txtBriefDesc_',
                                                                'id' => 'markItUp',
                                                                'value' => '',
                                                                'style' => 'height: 225px'
                                                            );
                                                            echo form_textarea($data);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload CV<span style='font-size: 9px; color: #0000ff'>&nbsp;<b>MAX 150KB</b> and only <b>doc | docx | pdf</b> allowed</span></label>
                                                <?php
                                                    $data = array(
                                                        'type' => 'file',
                                                        'placeholder' => 'Upload CV',
                                                        'class' => 'required form-control changecolor',
                                                        'name' => 'txtCV_',
                                                        'id' => 'txtCV_',
                                                        'value' => '',
                                                        'class'=>"form-control"
                                                    );
                                                    echo form_input($data);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="submit" name="profile_submit" id="profile_submit" style="float: right" class="form-control btn btn-info btn-fill pull-right" value="Update Profile" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="reset" name="profile_cancel" id="profile_cancel" style="float: right" class="form-control btn btn-danger btn-fill pull-right" value="Cancel" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: right; color: #ff0000;" id="_msg_"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                </div>
                <div class="row">
                    <?php $this->load->view('members/members');?>
                </div>
            </div>
        </div>