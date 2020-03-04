<?php


use App\Jobs\PrestigeMailer;


if (!function_exists('sendmail')) {

	function sendmail(array $data) {
		try {
			
			dispatch(new PrestigeMailer($data));

		} catch (\Exception $e) {

			throw $e;
		}
	}

}

if (! function_exists('sayHell')) {

	function sayHello()
	{
		return 'Hello';
	}
}