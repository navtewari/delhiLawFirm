<?php $this->load->view('templates/simpleGMapAPI'); ?>
<div class="legal">
    <div class="container">
        <div class="col-md-6 single-left">
            <div class="whomtop">
                <h4>Yadav Law Associates</h4>
                <h3 class="tittle">Contact us</h3>                
            </div>
            <div class="col-md-12 gridleft" style="margin-top: 1em;">        
				<p align="justify"><b>Corporate Office:</b> Office Number:4,Commercial Complex, Ashok Vihar, Phase-IV, New Delhi-110052</p>               
				<p>&nbsp;</p>
				
                <h3 style="margin-bottom: 1em;">CHAMBERS</h3>				
                <p align="justify"><b>North Zone:</b> Rohini District Courts, New Delhi, Chamber number: 728</p>               
                <p align="justify"><b>South Zone:</b>  Saket District Courts, New Delhi, Chamber Number: 186</p>
                <p align="justify"><b>Central Zone:</b>  Tis Hazari District Courts, Chamber Number 7, Civil Side.</p>
                <p align="justify"><b>South west zone:</b>  Dwarka District Courts, Chamber Number 724.</p>
            </div>
            <div class="col-md-12 gridleft" style="margin-top: 1em;margin-bottom: 1em;">        
                <h2 style="margin-bottom: 1em;">Find us on Google Map</h2>
                <div id="maps">
                    <?php
                    $map = new simpleGMapAPI();

                    $map->setWidth('100%');
                    $map->setHeight('370px');
                    $map->setBackgroundColor('#000');
                    $map->setMapDraggable(true);
                    $map->setDoubleclickZoom(true);
                    $map->setScrollwheelZoom(true);

                    $map->showDefaultUI(true);
                    $map->showMapTypeControl(true, 'DROPDOWN_MENU');
                    $map->showNavigationControl(true, 'DEFAULT');
                    $map->showScaleControl(true);
                    $map->showStreetViewControl(true);

                    $map->setZoomLevel(15); // not really needed because showMap is called in this demo with auto zoom
                    $map->setInfoWindowBehaviour('SINGLE_CLOSE_ON_MAPCLICK');
                    $map->setInfoWindowTrigger('CLICK');

					$map->addMarkerByAddress("Commercial Complex, Ashok Vihar, Phase-IV, New Delhi-110052,", "Office Number:4,Commercial Complex, Ashok Vihar, Phase-IV, New Delhi-110052", '<h3>Corporate Office</h3><p>Office number: 4</p>', "");
					
                    $map->addMarkerByAddress("Rohini District Courts, New Delhi,", "Rohini District Courts, New Delhi, Chamber number: 728", '<h3>Rohini District Courts, New Delhi</h3><p>Chamber number: 728</p>', "");

                    $map->addMarkerByAddress("Saket District Courts, New Delhi", "Saket District Courts, New Delhi", '<h3>Saket District Courts, New Delhi</h3><p>Chamber Number: 186</p>', "");

                    $map->addMarkerByAddress("Tis Hazari District Courts, Delhi", "Tis Hazari District Courts, Delhi", '<h3>Tis Hazari District Courts, Delhi</h3><p>Chamber Number 7, Civil Side</p>', "");

                    $map->addMarkerByAddress("Dwarka District Courts, Delhi", "Dwarka District Courts, Delhi", '<h3>Dwarka District Courts, Delhi</h3><p>Chamber Number 724</p>', "");


                    $map->printGMapsJS();
                    $map->showMap(true);
                    ?>
                </div>
            </div>                       
        </div>
        <div class="col-md-6 event-right wthree-event-right" style="margin-top:2em;">
            <div class="event-right1 agileinfo-event-right1">  
                <div class="categories w3ls-categories">
                    <h3>Client Section</h3>
                    <p class="lead" style="font-size: 15px; color: #d2322d"><?php echo $this->session->flashdata('error_msg'); ?></p>
                    <?php
                    $attrib_ = array(
                        'class' => 'form-horizontal',
                        'name' => 'frmClientForm',
                        'id' => 'frmClientForm',
                    );
                    ?>
                    <?php echo form_open_multipart('web/client_section', $attrib_); ?>                    
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
                                    'type' => 'text',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'placeholder' => 'Approx. Time of getting call from us',
                                    'name' => 'txtTime',
                                    'id' => 'txtTime',
                                    'value' => ''
                                );
                                echo form_input($data);
                                ?>
                            </div>
                            <div class="styled-input">
                                <?php
                                $data = array(
                                    'rows' => '3',
                                    'autocomplete' => 'off',
                                    'required' => 'required',
                                    'placeholder' => 'Your Query (Max 500 words)',
                                    'name' => 'txtQuery',
                                    'id' => 'txtQuery',
                                    'value' => ''
                                );
                                echo form_textarea($data);
                                ?>
                            </div>
                            <p style="font-size: 12px; text-align: justify; margin-top: 1em;">IMPORTANT E-MAIL NOTICE FOR POTENTIAL CLIENTS: By clicking "Submit", you agree that a Yadav Law Associates lawyer may review any information you transmit to us and that by doing so we do not create an attorney-client relationship with you. You recognize that our review of your information, even if you submitted it in a good faith effort to retain us, and even if it is highly confidential, does not preclude us from representing another client directly adverse to you, even in a matter where that information could and will be used against you. If Yadav Law Associates has already agreed in writing to represent you in this matter, this notice does not apply to you. Please check the "I Agree..." checkbox below before sending this email.</p><br>
                            <p>View the <a href="#" data-toggle="modal" data-target="#myModal">Legal Notice of Use</a> for this website.</p>
                            <div class="styled-input">
                                <p style="font-size:13px;"><input type="checkbox" name="terms" id="terms" onClick="EnableSubmit(this)"> I HAVE READ AND AGREE WITH THE ABOVE DISCLAIMER AS WELL AS THE LEGAL NOTICE OF USE FOR THIS WEBSITE.</p>
                            </div>
                            <div class="styled-input">
                                <button id="submit" type="submit" class="btn btn-primary col-sm-12" disabled>SUBMIT</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                    <p></p>
                </div>
            </div>            
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script language="JavaScript">

    function EnableSubmit(val)
    {
        var sbmt = document.getElementById("submit");

        if (val.checked == true)
        {
            sbmt.disabled = false;
        }
        else
        {
            sbmt.disabled = true;
        }
    }
</script> 

<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Disclaimer
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">                
                <p align="justify">Yadav Law Associates presents the content of this website for informational purposes only. It may not reflect the most current legal developments and may not indicate future results. Moreover, you should not construe this to be legal advice. Yadav Law Associates does not intend that either its delivery or your receipt of this material create any lawyer-client relationship. You should not make decisions based upon this information without consulting a lawyer.</p>
                <p align="justify">This website may include links and information leading to other websites and platforms. Yadav Law Associates furnishes these links in an attempt to provide you with more information. However, Yadav Law Associates is not responsible for, and does not necessarily approve of, the materials and contents contained in those linked websites and platforms.</p>
            </div>
        </div>
    </div>
</div>