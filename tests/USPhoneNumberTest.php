<?php

// Namespace
namespace Ewereka\Validation\Rules\Tests;

// Using directives
use Orchestra\Testbench\TestCase as Orchestra;
use Ewereka\Validation\Rules\USPhoneNumber;

// Telephone number test
class USPhoneNumberTest extends Orchestra
{

	/** @test */
	public function the_telephone_number_rule_can_be_validated()
	{
		// Define the validation rule
		$rule = ['phone' => [new USPhoneNumber]];

		// Execute the tests
		$this->assertFalse(validator(['phone' => '1'], $rule)->passes());
		$this->assertFalse(validator(['phone' => '1#'], $rule)->passes());
		$this->assertFalse(validator(['phone' => 'a1#'], $rule)->passes());
		$this->assertFalse(validator(['phone' => 'aB1#'], $rule)->passes());
		$this->assertFalse(validator(['phone' => '123456'], $rule)->passes());
		$this->assertFalse(validator(['phone' => '1234567890123456'], $rule)->passes());
		$this->assertTrue(validator(['phone' => '1234567890'], $rule)->passes());
	}

}