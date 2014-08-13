<div class="container" id="container">
    <div class="panel-default panel"id="panel2">
        <div class="form">
            <form role="form" method="post" action="<?php echo base_url() . 'user/signin_validation'?>">
             <?php echo validation_errors();?>
            <div class="form-group">
                <input type="text" class="form-control login-field" value="" placeholder="Username *" id="login-name" name="username"/>
                <label class="login-field-icon glyphicon glyphicon-user" for="login-name"></label>
            </div>

            <div class="form-group">
                <input type="password" class="form-control login-field" value="" placeholder="Password *" id="login-pass" name="password"/>
                <label class="login-field-icon glyphicon glyphicon-lock" for="login-pass"></label>
            </div>
            <div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
            </div>
            <a class="login-link" href="#">Forgot your password?</a>
            </form>
        </div>
    </div>
</div>
