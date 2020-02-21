<?php
/*
Plugin Name: MyBBCode
Description: Écrire du BBCode dans les articles afin que les visiteurs puissent voir un texte apparaitre lors du survol sur un lien.
Version: 0.1
Author: Grégory Koenig
*/

function my_mce_buttons_2( $buttons ) {	
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';

	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );