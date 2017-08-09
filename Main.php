<?php

class GirlFriend{

	public $children = [];

	function __construct(){
	}

	function MakeCoupleEvent(){
	}

	function DestoryCoupleEvent(){
	}

	function MakeChildEvent(){
		$children[] = new Child();
	}
	
	function __destruct(){
	}

}


class Child{

	function __construct(){
	}

	function __destruct(){
	}

}


new GirlFriend();