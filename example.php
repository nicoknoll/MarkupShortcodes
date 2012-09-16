<?php

$shortcode = $modules->get('MarkupShortcodes');

$shortcode->add('login', function($atts){
	return '<form><h3>'.$atts['content'].'</h3><label>Enter password for "'.$atts['name'].'":</label> <input type="pass"></form>'; 
});

$content = 'Lorem ipsum dolor [login name="user"]Login[/login]';

echo $shortcode->render($content);

?>
