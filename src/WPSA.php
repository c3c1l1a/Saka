<?php

namespace wpsa;

require_once __DIR__."/controller/WishController.php";
require_once __DIR__."/utils/SingletonClass.php";

class WPSA extends SingletonClass{
	public function __construct(){
		WishController::instance();
	}
}




