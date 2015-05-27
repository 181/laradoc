<?php

/*
 * This file is part of Laravel Algolia.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

	/*
	|--------------------------------------------------------------------------
	| Default Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the connections below you wish to use as
	| your default connection for all work. Of course, you may use many
	| connections at once using the manager class.
	|
	*/

	'default' => 'main',

	/*
	|--------------------------------------------------------------------------
	| Algolia Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the connections setup for your application. Example
	| configuration has been included, but you may add as many connections as
	| you would like.
	|
	*/

	'connections' => [

		'main' => [
			'id' => '8BB87I11DE',
			'search_key' => '8e1d446d61fce359f69cd7c8b86a50de',
			'key' => env('ALGOLIA_ADMIN_KEY', ''),
		],

	],

];
