<?php 

namespace Bhavinjr\Ekomi\Facades;

use Illuminate\Support\Facades\Facade;

class Ekomi extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'ekomi';
	}
	
}