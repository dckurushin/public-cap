<?php
echo Form::open('/site/login.html', array('method' => 'post'));
echo Form::label('username', 'Username:');
echo Form::input('username');
echo Form::label('password', 'Password:');
echo Form::password('password');
echo Form::submit(NULL, 'Login');
echo Form::close();