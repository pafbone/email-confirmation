<?php namespace Aamant\EmailConfirmation\Facade;

use Illuminate\Support\Facades\Facade;

class EmailConfirmation extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'email-confirmation'; }
}