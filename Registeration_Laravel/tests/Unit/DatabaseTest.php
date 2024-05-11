<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /*
     * A basic unit test example.
     *
     * Test if we Can Connect To The DataBase Or Not.
     */

    // RefreshDatabase trait is used to migrate and rollback database migrations during testing
    use RefreshDatabase;

    public function test_database_connection_success()
    {
        try {
            // Call the "artisan" command to migrate the database
            $this->artisan('migrate');

            // If migration is successful, assert true to indicate successful database connection
            $this->assertTrue(true);
        } catch (\Exception $e) {
            // If an exception occurred during migration, fail the test and provide an error message
            $this->fail("Could not connect to the database. Please check your configuration. Error: " . $e->getMessage());
        }
    }
}
