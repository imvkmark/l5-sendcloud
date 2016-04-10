<?php namespace Imvkmark\L5Sendcloud;

use Illuminate\Support\Facades\Facade;

class L5SendCloudFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'lemon.sendcloud';
	}
}