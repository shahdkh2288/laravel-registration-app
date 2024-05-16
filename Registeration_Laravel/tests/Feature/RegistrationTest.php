<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Registration;

class RegistrationTest extends TestCase
{
    use DatabaseTransactions;

    public function testItCanInsertANewStudentAndReturnsASuccessfulResponse()
    {
        Storage::fake('public');

        $data = [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'Ssecret12333$',
            'email' => 'johndoe@example.com',
            'phone' => '01001876767',
            'address' => '123 Main St',
            'birthday' => '1990-01-01',
            'image' => UploadedFile::fake()->image('test-image.jpeg', 100, 100),
        ];

        $response = $this->post('/registrations', $data);

        $response->assertStatus(200);
        $response->assertSessionHas('success', 'Insertion performed successfully');

        $this->assertDatabaseHas('registrations', ['username' => 'johndoe']);
    }
}
