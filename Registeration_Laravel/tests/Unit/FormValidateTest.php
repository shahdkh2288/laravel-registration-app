<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\TestCase;



class FormValidateTest extends TestCase
{
    /*
    /**
     * Check a field and value against validation rule
     *
     * @param string $field
     * @param mixed $value
     * @return bool
     */
    protected function validateField(string $field, $value): bool
    {
        // Define the regular expression pattern
        $pattern = '/^[a-zA-Z]+ [a-zA-Z]+$/';

        // Validate the value against the pattern
        return preg_match($pattern, $value);
    }

    /**
     * Test full_name validation rules
     *
     * @return void
     */
    public function test_valid_Full_name()
    {
        $this->assertTrue($this->validateField('full_name', 'Jon Mark'));
        $this->assertTrue($this->validateField('full_name', 'Jo Smith'));
        $this->assertFalse($this->validateField('full_name', 'John'));
        $this->assertFalse($this->validateField('full_name', ''));
        $this->assertFalse($this->validateField('full_name', '123'));
        $this->assertFalse($this->validateField('full_name', 'Jon1'));
    }
   
}
