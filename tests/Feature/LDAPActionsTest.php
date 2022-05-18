<?php

namespace Tests\Feature;

use App\LDAP\LDAPActions;
use Tests\LDAPTestCase;

class LDAPActionsTest extends LDAPTestCase
{
	public function testLDAPActions()
	{
		$ldap = $this->get_ldap();
		try {
			$test_user = [
				'user' => LDAPTest::TESTUSER, 'display_name' => LDAPTest::TESTUSER_CN, 'email' => LDAPTest::TESTUSER_EMAIL,
			];
			// 2
			$this->assertTrue($ldap->test_LDAP_open(), 'Connection to LDAP test server failed');

			$user_list = $ldap->get_user_list(true);
			$this->assertIsArray($user_list, 'The user list should be an array');
			$this->assertTrue(count($user_list) > 1, 'The user list should contain more than one entry');
			LDAPActions::update_users($user_list, false);
			LDAPActions::update_users($user_list, true);
			$this->assertTrue($ldap->test_LDAP_close(), 'Connection to LDAP server cannot be closed');
		} finally {
			$this->done_ldap();
		}
	}
}
