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
 		
 	}

 	public static function install(){}
 	public static function uninstall(){}

 }

 new MBPortfolioPlugin();

?>