<?php

$login="QWERTY";
$email="habib@mail.ru";
$languages=[
    'EN'=>'English',
    'RU'=>'Russian',
    'UA'=>'Ukrainian'
];

foreach ($languages as $key => $value) {
    $option .= "<option value = '$key' > $value</option >";
    }

$render = "<form>
<span>Email</span>
<input type='text' name='email' value='$email'><br>
<span>Login</span>
<input type='text' name='login' value='$login'><br>
<span>Password</span>
<input type='password' name='password'><br>
<span>Choose your  language</span>
<select>
    $option
</select><br>
<button type='submit'> Register</button>
</form>";

echo $render;