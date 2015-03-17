<?php

namespace DKaefer;

class DisposableEmailTest extends \PHPUnit_Framework_TestCase
{
	public function testisDisposableEmailTrue()
	{
		$disposableEmail = 'test@whyspam.me';
		$check = DisposableEmail::isDisposableEmail($disposableEmail);
		$this->assertTrue($check);
	}

	public function testisDisposableEmailFalse()
	{
		$notDisposableEmail = 'test@gmail.com';
		$check = DisposableEmail::isDisposableEmail($notDisposableEmail);
		$this->assertFalse($check);
	}

	public function testisDisposableEmailException()
    {
    	$this->setExpectedException('\InvalidArgumentException');
    	$invalidEmail = 'test.gmail.com';
		$check = DisposableEmail::isDisposableEmail($invalidEmail);
    }

    public function testisDisposableEmailExceptionNoString()
    {
    	$this->setExpectedException('\InvalidArgumentException');
    	$invalidEmail = new \stdClass;
		$check = DisposableEmail::isDisposableEmail($invalidEmail);
    }
}