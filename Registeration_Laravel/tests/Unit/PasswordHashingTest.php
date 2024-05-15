<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PasswordHashingTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test password hashing.
     *
     * @return void
     */
    public function testPasswordHashing()
    {
        // Given
        $plainPassword = 'secret123'; 
        
        // When
        $hashedPassword = Hash::make($plainPassword);

        // Then
        $this->assertTrue(Hash::check($plainPassword, $hashedPassword));
    }
}
