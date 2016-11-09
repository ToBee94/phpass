<?php


use tvorwachs\Phpass\PasswordHash;

class BasicTest extends \PHPUnit_Framework_TestCase
{
 	public function test_correct_hash()
    {
		$correct = 'test12345';
		
    	$t_hasher  = new PasswordHash(8, false);
		$hash 	 = $t_hasher->HashPassword($correct);
		
		$this->assertTrue($t_hasher->CheckPassword($correct, $hash));
    }

    public function test_not_correct_hash()
    {
		$correct = 'test12345';
		$wrong   = 'test12346';
		
    	$t_hasher  = new PasswordHash(8, false);
		$hash 	 = $t_hasher->HashPassword($correct);

		$this->assertFalse($t_hasher->CheckPassword($wrong, $hash));
    }

    public function test_weak_hashes()
    {
		$correct = 'test12345';
		$wrong   = 'test12346';
		
    	$t_hasher  = new PasswordHash(8, true);
		$hash 	 = $t_hasher->HashPassword($correct);

    	$this->assertTrue($t_hasher->CheckPassword($correct, $hash));
		$this->assertFalse($t_hasher->CheckPassword($wrong, $hash));
    }

    public function test_portable_hashes()
    {
		$correct = 'test12345';
    	$wrong   = 'test12346';
		$hash = '$P$9IQRaTwmfeRo7ud9Fh4E2PdI0S3r.L0';

    	$t_hasher  = new PasswordHash(8, true);

    	$this->assertTrue($t_hasher->CheckPassword($correct, $hash));
		$this->assertFalse($t_hasher->CheckPassword($wrong, $hash));
    }
}