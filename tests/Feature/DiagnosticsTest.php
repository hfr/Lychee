<?php

/** @noinspection PhpUndefinedClassInspection */

namespace Tests\Feature;

use AccessControl;
use App\Models\Configs;
use Tests\TestCase;

class DiagnosticsTest extends TestCase
{
	/**
	 * Test diagnostics.
	 *
	 * @return void
	 */
	public function testDiagnostics()
	{
		$response = $this->get('/Diagnostics');
		$response->assertOk(); // code 200 something

		AccessControl::log_as_id(0);

		$response = $this->get('/Diagnostics');
		$response->assertOk(); // code 200 something

		Configs::where('key', '=', 'lossless_optimization')->update(['value' => null]);

		$response = $this->postJson('/api/Diagnostics::get');
		$response->assertOk(); // code 200 something too

		$response = $this->postJson('/api/Diagnostics::getSize');
		$response->assertOk(); // code 200 something too

		Configs::where('key', '=', 'lossless_optimization')->update(['value' => '1']);

		AccessControl::logout();
	}
}
