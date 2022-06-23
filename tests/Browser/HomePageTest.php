<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_mens_nav_header()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->click('@product-nav-link')
                ->assertSee('Men\'s Streetwear');
        });
    }

    public function test_click_filter_cat_hides_filter()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/products')
                // ->click('@filter-cat')
                // ->assertSeeNothingIn($selector);
            });
    }
}