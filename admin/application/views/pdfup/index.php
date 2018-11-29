<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Upload Files</h4>
                    </div>
                    <?php
                        $data = array(
                            'name' => 'frmFileUpload', 
                            'id' => 'frmFileUpload', 
                            'role' => 'form', 
                            'class' => 'form-group'
                            );
                        echo form_open_multipart('#', $data);
                    ?>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>URL (if any)</label>
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'placeholder' => 'Upload Files',
                                        'class' => 'required form-control',
                                        'name' => 'txtURL',
                                        'id' => 'txtURL',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>Select File (MAX 6.5MB)</label>
                                    <?php
                                    $data = array(
                                        'type' => 'file',
                                        'placeholder' => 'Upload Files',
                                        'required' => 'required',
                                        'class' => 'required form-control',
                                        'name' => 'myfile',
                                        'id' => 'myfile',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>                
                                <div class="form-group">
                                    <div style="color: #ff0000; float: left; padding: 8px 0px 0px 0px" id="message_"></div>
                                    <input type="submit" id="upload_file_button" class="form-group btn btn-info btn-fill pull-right" value="UPLOAD" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="width: 100%; min-height: 200px; height: auto; overflow: hidden">
                    <div class="header">
                        <h4 class="title">Uploaded Files</h4>
                    </div>
                    <div class="col-md-12" id="files_here">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>