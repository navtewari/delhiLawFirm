<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="margin-top: 5%"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Login <div class="font-icon-detail" style="float: right; font-size: 35px"><a href="<?php echo site_url('admin/logout'); ?>"><i class="pe-7s-close"></i></a></div></h4>
                </div>
                <div class="content">
                    <?php
                        $data = array(
                            'name' => 'frmLogin', 
                            'id' => 'frmLogin', 
                            'role' => 'form', 
                            'class' => 'form-group'
                            );
                        echo form_open('admin/checkAuthen', $data);
                    ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <?php
                                        $data = array(
                                            'type' => 'text',
                                            'placeholder' => 'Username',
                                            'class' => 'required form-control',
                                            'required' => 'required',
                                            'name' => 'txtUser',
                                            'id' => 'txtUser',
                                            'value' => '',
                                            'class'=>"form-control"
                                        );
                                        echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <?php
                                        $data = array(
                                            'type' => 'password',
                                            'class' => 'required form-control',
                                            'required' => 'required',
                                            'name' => 'txtPwd',
                                            'id' => 'txtPwd',
                                            'value' => '',
                                            'class'=>"form-control"
                                        );
                                        echo form_input($data);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Sign-in</button>
                        <div class="clearfix" style="margin-top:10px; color:#ff0000">
                            <?php echo $this->session->flashdata('msg_'); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>