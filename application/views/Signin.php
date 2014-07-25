<div id="login_form">
    <h1>User Login</h1>
    <?php
    echo form_open('login/Validate_Credentials');
    echo form_input('username', 'Username');
    echo form_password('password', 'Password');

    echo form_submit('submit', 'Signin');
    echo anchor('login/Signup', 'Create Account');
    ?>
</div>
