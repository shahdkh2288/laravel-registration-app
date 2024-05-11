<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class RequiredTest extends TestCase
{
    /**
     * Test if the value is required.
     *
     * @return void
     */
    public function test_required_value()
    {
        // Call the CheckRequired method with an empty value
        $isRequired = $this->CheckRequired('');
        
        // Assert that the value is not required
        $this->assertFalse($isRequired);
    }

    /**
     * Check if the value is required based on a regular expression pattern.
     *
     * @param  string  $value
     * @return bool
     */
    protected function CheckRequired($value)
    {
        // Define the regular expression pattern for required
        $pattern = '/\S+/'; // Matches one or more non-whitespace characters
        
        // Validate the value against the pattern
        return preg_match($pattern, $value) === 1;
    }
}
