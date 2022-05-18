<?php

namespace Tests;

use App\Models\Configs;
use Tests\Feature\Lib\LDAPTestFunctions;

class LDAPTestCase extends TestCase
{
	public const TESTUSER = 'gauss';
	public const TESTUSER_PW = 'password';
	public const TESTUSER2 = 'euler';
	public const TESTUSER2_PW = 'password';
	public const TESTUSER_DN = 'uid=gauss,dc=example,dc=com';
	public const TESTUSER_CN = 'Carl Friedrich Gauss';
	public const TESTUSER_EMAIL = 'gauss@ldap.forumsys.com';
	public const TESTUSER_FILTER = '(uid=gauss)';

	public const SERVER = 'ldap.forumsys.com';
	public const USER_TREE = 'dc=example,dc=com';
	public const USER_FILTER = '(uid=%{user})';
	public const BIND_DN = 'cn=read-only-admin,dc=example,dc=com';
	public const BIND_PW = 'password';

	public const UNKNOWN_USER = 'test4711';

	public $oldconfigs = null;

	private $ldap_test = null;

	public static function _debug($myDebugVar, $label = '', $oneline = true)
	{
		$msg = print_r($myDebugVar, true);
		if ($oneline) {
			$msg = str_replace(PHP_EOL, ' ', $msg);
			while (str_contains($msg, '  ')) {
				$msg = str_replace('  ', ' ', $msg);
			}
		}
		error_log($label . "'" . trim($msg) . "'");
	}

	protected function LDAP_setUp(): void
	{
		$this->oldconfigs = Configs::get();

		Configs::set('ldap_server', self::SERVER);
		Configs::set('ldap_user_tree', self::USER_TREE);
		Configs::set('ldap_user_filter', self::USER_FILTER);
		Configs::set('ldap_bind_dn', self::BIND_DN);
		Configs::set('ldap_bind_pw', self::BIND_PW);
	}

	protected function LDAP_tearDown(): void
	{
		Configs::set('ldap_enabled', $this->oldconfigs['ldap_enabled']);
		Configs::set('ldap_server', $this->oldconfigs['ldap_server']);
		Configs::set('ldap_user_tree', $this->oldconfigs['ldap_user_tree']);
		Configs::set('ldap_user_filter', $this->oldconfigs['ldap_user_filter']);
		Configs::set('ldap_bind_dn', $this->oldconfigs['ldap_bind_dn']);
		Configs::set('ldap_bind_pw', $this->oldconfigs['ldap_bind_pw']);
	}

	protected function get_ldap()
	{
		if (is_null($this->ldap_test)) {
			$this->ldap_test = new LDAPTestFunctions();
		}
		$this->LDAP_setUp();

		return $this->ldap_test;
	}

	protected function done_ldap()
	{
		$this->LDAP_tearDown();
	}
}
