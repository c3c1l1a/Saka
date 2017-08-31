<?php
namespace wpsa;

require_once __DIR__."/../utils/SingletonClass.php";

class WishController extends SingletonClass{
	protected function __construct(){
		add_action("init", array($this, "createWish"));
	}

	public function createWish(){
		$wish = array(
			'public' => True,
			'labels' => array(
				'name' => __('Wishes'),
				'singular_name' => __('Wish'),

			),
		);
		register_post_type('wish', $wish);
	}
}