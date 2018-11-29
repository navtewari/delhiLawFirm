<div class="legal">
    <div class="container">
        <div class="col-md-7 single-left">
            <div class="whomtop">
                <h4>Yadav Law Associates</h4>
                <h3 class="tittle">Build Career with Us</h3>                
            </div>
            <div class="col-md-12 gridleft">
                <p align="justify">Yadav Law Associates hires lawyers with the potential to grow into partners. When we recruit law school graduates, our goal is to select individuals who demonstrate strong intellect, initiative, sound judgment, good communication skills, and determination to develop into future leaders of our firm and community.</p>
                <p align="justify">Our continued growth through economic highs and lows can be credited to our diverse practice, which presents associates with opportunities for challenging new work, and allows for growth when readiness for partnership responsibility is evident.</p>
                <p align="justify">Yadav Law Associates views associate development as the responsibility of both the firm and the individual lawyer. We set goals, communicate, and use the wealth of resources available to challenge our associates, allowing Yadav Law Associates to continue to be the leader in legal services for our clients across the globe. </p>
                <p align="justify">We also provide onsite training through associate-run seminars on basic aspects of legal practice and specialized instruction by senior practitioners.</p>
                <p align="justify">Our associates regularly receive performance evaluations to determine professional development and advancement toward partnership.</p>
                <p align="justify">With regular meetings, firm-wide lunches, and many less-formal activities, Yadav Law Associates is an enjoyable place in which to learn and grow. We value collegiality and mutual support as the very principles of our firm’s culture.</p>
            </div>                      
        </div>
        <div class="col-md-5 event-right wthree-event-right" style="margin-top:2em;">
            <div class="event-right1 agileinfo-event-right1">  
                <div class="categories w3ls-categories">
                    <h3>Submit Curriculum Vitae</h3>
                    <p class="lead" style="font-size: 15px; color: #d2322d"><?php echo $this->session->flashdata('error_msg'); ?></p>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmClientForm',
                        'id' => 'frmClientForm',
                    );
                    ?>
                    <?php echo form_open_multipart('web/uploadCV', $attrib_); ?>                    
                        <div class="row contact-form">
                            <div class="col-sm-12">
                                <div class="styled-input agile-styled-input-top">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'Name',                                       
                                        'name' => 'txtName',
                                        'id' => 'txtName',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="styled-input">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'Your City',                                       
                                        'name' => 'txtCity',
                                        'id' => 'txtCity',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="styled-input">
                                    <?php
                                    $data = array(
                                        'type' => 'email',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'E-mail',                                      
                                        'name' => 'txtEmail',
                                        'id' => 'txtEmail',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="styled-input">
                                    <?php
                                    $data = array(
                                        'type' => 'text',
                                        'autocomplete' => 'off',
                                        'required' => 'required',
                                        'placeholder' => 'Mobile/Phone',                                       
                                        'name' => 'txtPh',
                                        'id' => 'txtPh',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="styled-input">
                                    <?php
                                    $data = array(
                                        'type' => 'file',
                                        'autocomplete' => 'off',
                                        'required' => 'required',                                        
                                        'placeholder' => 'Upload Current CV',
                                        'name' => 'txtUploadFile',
                                        'id' => 'txtUploadFile',
                                        'value' => ''
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary col-sm-12">Send Enquiry</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>