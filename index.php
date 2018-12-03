<?php
class father{
	public function __construct()
	{
		echo 'hello world ,hello php!';
	}
}

class son extends father{
	parent::__construct()
	{
		echo 'this is son class';
	}
}

class pet{
	public function __construct()
	{
		echo 'this is class of pet';
	}
}

