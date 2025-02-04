<?php

namespace Tests\Feature;

use App\Facades\AccessControl;
use App\Models\User;
use DarkGhostHunter\Larapass\Eloquent\WebAuthnCredential;
use Tests\TestCase;

class WebAuthTest extends TestCase
{
	/**
	 * Testing the Login interface.
	 *
	 * @return void
	 */
	public function testWebAuthTest()
	{
		AccessControl::log_as_id(0);

		$response = $this->postJson('/api/WebAuthn::register/gen');
		$response->assertOk();

		$response = $this->postJson('/api/WebAuthn::register', [
			'id' => '-PhslGzltOv3nJ0j8Or1AuNHh9kgmMQmOdM0A7eF7yJcAuSZzFa9YhSHfrYvyllhNUhuIMTE6hFYA3Ef7gCOwg',
			'rawId' => '+PhslGzltOv3nJ0j8Or1AuNHh9kgmMQmOdM0A7eF7yJcAuSZzFa9YhSHfrYvyllhNUhuIMTE6hFYA3Ef7gCOwg==',
			'response' => [
				'attestationObject' => 'o2NmbXRkbm9uZWdhdHRTdG10oGhhdXRoRGF0YVjEc0C5YcCE9mphY/zz0IU/zq4zv5kiobJsNcgdhuZXNrJBAAAAAAAAAAAAAAAAAAAAAAAAAAAAQPj4bJRs5bTr95ydI/Dq9QLjR4fZIJjEJjnTNAO3he8iXALkmcxWvWIUh362L8pZYTVIbiDExOoRWANxH+4AjsKlAQIDJiABIVggyctxuQjqpB1PlDdNSwyb0kR0eKna/QyhZLB8LuC9sTkiWCA8wbkGKQSgde657MkSh4bq1zq8BJAqLL/UG6RcuBVxpA==',
				'clientDataJSON' => 'eyJ0eXBlIjoid2ViYXV0aG4uY3JlYXRlIiwiY2hhbGxlbmdlIjoiQl9vclJ0UVRQUEpVT0JyMjlPRGw1dyIsIm9yaWdpbiI6Imh0dHBzOi8vbHljaGVlLnRlc3QiLCJjcm9zc09yaWdpbiI6ZmFsc2V9',
			],
			'type' => 'public-key',
		]);
		$response->assertForbidden();

		AccessControl::logout();

		$response = $this->postJson('/api/WebAuthn::login/gen', ['user_id' => 0]);
		$response->assertOk();

		$response = $this->postJson('/api/WebAuthn::login', [
			'id' => 'jQJF5u0Fn-MsdabIxKJoxc19XSLXDCSDqs4g8TV1rXXXBDSEoT6LeRN60CfxZskRxq15EEl43OIbPluD7dVT0A',
			'rawId' => 'jQJF5u0Fn+MsdabIxKJoxc19XSLXDCSDqs4g8TV1rXXXBDSEoT6LeRN60CfxZskRxq15EEl43OIbPluD7dVT0A==',
			'response' => [
				'authenticatorData' => 'c0C5YcCE9mphY/zz0IU/zq4zv5kiobJsNcgdhuZXNrIBAAAADQ==',
				'clientDataJSON' => 'eyJ0eXBlIjoid2ViYXV0aG4uZ2V0IiwiY2hhbGxlbmdlIjoiOHhfMm5CcnNVb1dkcVFtTkN3VFY2ZyIsIm9yaWdpbiI6Imh0dHBzOi8vbHljaGVlLnRlc3QiLCJjcm9zc09yaWdpbiI6ZmFsc2V9',
				'signature' => 'MEYCIQCjN9LZ1IrcycOkSRsxswKnh0gcOu1ZpexcvhxyhUgqQwIhAJuDDQnKqZD0+ed1EA5If+Sowv2T9tBodVb4a+DReTQZ',
				'userHandle' => '',
			],
			'type' => 'public-key',
		]);
		$response->assertUnauthorized();

		AccessControl::log_as_id(0);

		$response = $this->postJson('/api/WebAuthn::list');
		$response->assertOk(); // code 200 something

		$key = new WebAuthnCredential([
			'id' => '1234',
			'user_handle' => '575bcef3-5e74-4785-b089-575dcefbff33',
			'type' => 'public-key',
			'transports' => '[]',
			'attestation_type' => '"none"',
			'trust_path' => '{"type":"Webauthn\\TrustPath\\EmptyTrustPath"}',
			'aaguid' => '00000000-0000-0000-0000-000000000000',
			'public_key' => '',
			'counter' => '0',
		]);
		$user = User::query()->find(0);
		$user->webAuthnCredentials()->save($key);

		$response = $this->postJson('/api/WebAuthn::delete', ['id' => '1234']);
		$response->assertNoContent();

		AccessControl::logout();

		$response = $this->postJson('/api/WebAuthn::delete', ['id' => '1234']);
		$response->assertUnauthorized();
	}
}
