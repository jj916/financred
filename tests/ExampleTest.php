<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testBasicExample()
    {

        $user=Factory(App\User::class)->create(
            [
                'name'=>'Jhon Jairo',
                'email'=>'jhonjairo.916@hotmail.com'
            ]
            );

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Jhon jairo')
            ->see('jhonjairo.916@hotmail.com')
            //->dump()//para ver que se esta imprimiendo
            ;
    
        
    }
}
