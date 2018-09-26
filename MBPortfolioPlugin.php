<?php
/*
	Plugin Name: Portfolio Plugin pour Natty
	Author: MB
	Description: Permet la création de "Dessins" pour faire un portfolio.
	Version: 1.0
*/

 class MBPortfolioPlugin {

 	public function __construct(){
 		register_activation_hook(__FILE__, array('MBPortfolioPlugin', 'install'));
 		register_uninstall_hook(__FILE__, array('MBPortfolioPlugin', 'uninstall'));

 		add_action('init', array($this, 'createDrawingPostType'));

 	}

 	public function createDrawingPostType(){
 		register_post_type('drawings', array(
 			"labels" => array(
 				"name" => "Dessins",
 				"singular_name" => "Dessin",
 				"add_new_item" => "Nouveau Dessin",
 				"edit_item" => "Modifier un Dessin",
 				"view_item" => "Voir",
 			),
 			"public" => true,
 			"menu_position" => 2,
 			"supports" => array(
 				"title",
 				"editor",
 				"thumbnail",
 			),
 			"has_archive" => true,
 		));
 	}

 	public static function install(){}
 	public static function uninstall(){}

 }

 new MBPortfolioPlugin();

?>