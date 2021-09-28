    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="" action="<?= base_url('login/registrasi'); ?>" method="post">
               <h3 class="font-green">Sign Up</h3>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label">Full Name</label>
                    <input class="form-control placeholder-no-fix" type="text" name="fullname" id="fullname" value="<?= set_value('fullname');  ?> " /> 
                     <?= form_error('fullname', '<small class="text-danger">', '</small>'); ?>   
                    
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" name="email" id="email" value="<?= set_value('email');  ?>"/> 
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?> 
                </div>
                <!-- <p class="hint"> Enter your account details below: </p> -->
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password1" id="password1" /> 
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password2" id="password2" /> </div>
                <div class="form-actions">
                    <a href="<?= base_url('login') ?>"><button type="button" id="register-back-btn" class="btn green btn-outline">Back</button></a>
                    <button type="submit" id="submit" name="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <!-- <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form> -->
            <!-- END FORGOT PASSWORD FORM -->
        </div>
        <div class="copyright"> 2014 © LPDB. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
<![endif]-->
        