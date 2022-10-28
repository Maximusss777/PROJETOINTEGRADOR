<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistroTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)
        ->assertSeeText('Cadastro');
    }
    public function test_shouldnt_register_user_when_invalid_data()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
        ->assertInvalid(['name','email','password']);

    }
    public function test_should_register_user_when_valid_data()
    {
        $response = $this->post('/register',[
          'name'=> 'Lukas',
          'email'=>'lukemichele@gmail.com',
          'password' => 'topsecret',
          'password_confirmation' => 'topsecret',
          'company_name' => 'Empresa LTDA',
          'trading_name' => 'Nome Fantasia',
          'address' => 'Rua Guaira',
          'phone' => '(42) 999742781',
          'cnpj' => '43435443565327',
          'type' => 'manager'
        ]);

        $response->assertRedirect()
        ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', ['email' => 'lukemichele@gmail.com']);

        $this->assertDatabaseHas('establishments', ['cnpj' => '43435443565327']);
    }
}
