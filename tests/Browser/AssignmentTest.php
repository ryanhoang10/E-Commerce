<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AssignmentTest extends DuskTestCase
{
    /** @test*/
    public function a_user_can_click_a_button()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('In Progress')
                    ->click('input[type="checkbox"]')
                    ->assertSee('Completed');
        });
    }
}
