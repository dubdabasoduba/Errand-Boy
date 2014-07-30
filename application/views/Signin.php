<div class="container" id="container">
    <div class="panel-default panel"id="panel2">
        <div class="form" method="POST" action="<?php echo base_url() . 'user/siginin_validation'?>">
            <div class="form-group">
                <input type="text" class="form-control login-field" value="" placeholder="Username *" id="login-name" />
                <label class="login-field-icon glyphicon glyphicon-user" for="login-name"></label>
            </div>

            <div class="form-group">
                <input type="password" class="form-control login-field" value="" placeholder="Password *" id="login-pass" />
                <label class="login-field-icon glyphicon glyphicon-lock" for="login-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" type="submit">Sign In</a>
            <a class="login-link" href="#">Forgot your password?</a>
        </div>
    </div>
</div>
