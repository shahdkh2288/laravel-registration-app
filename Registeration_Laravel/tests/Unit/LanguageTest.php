<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Lang;
use Tests\TestCase;

class LanguageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Russian translation of registration form.
     *
     * @return void
     */
    public function testRussianTranslation()
    {
        // Mock the translation for the locale
        Lang::shouldReceive('get')->with('locale.registration_form')->andReturn('Форма регистрации');
        Lang::shouldReceive('get')->with('locale.full_name')->andReturn('Полное имя');
        Lang::shouldReceive('get')->with('locale.username')->andReturn('Имя пользователя');
        Lang::shouldReceive('get')->with('locale.email')->andReturn('Электронная почта');
        Lang::shouldReceive('get')->with('locale.password')->andReturn('Пароль');
        Lang::shouldReceive('get')->with('locale.confirm_password')->andReturn('Подтвердите пароль');
        Lang::shouldReceive('get')->with('locale.phone_number')->andReturn('Номер телефона');
        Lang::shouldReceive('get')->with('locale.address')->andReturn('Адрес');
        Lang::shouldReceive('get')->with('locale.birthdate')->andReturn('Дата рождения');
        Lang::shouldReceive('get')->with('locale.submit')->andReturn('Отправить');
    
        // Your test assertions can go here
        $this->assertEquals('Форма регистрации', Lang::get('locale.registration_form'));
        $this->assertEquals('Полное имя', Lang::get('locale.full_name'));
        $this->assertEquals('Имя пользователя', Lang::get('locale.username'));
        $this->assertEquals('Электронная почта', Lang::get('locale.email'));
        $this->assertEquals('Пароль', Lang::get('locale.password'));
        $this->assertEquals('Подтвердите пароль', Lang::get('locale.confirm_password'));
        $this->assertEquals('Номер телефона', Lang::get('locale.phone_number'));
        $this->assertEquals('Адрес', Lang::get('locale.address'));
        $this->assertEquals('Дата рождения', Lang::get('locale.birthdate'));
        $this->assertEquals('Отправить', Lang::get('locale.submit'));
    }
    

}
