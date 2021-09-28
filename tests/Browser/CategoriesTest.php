<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @internal
 */
final class CategoriesTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = \App\User::find(1);
        $this->browse(static function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.categories.index'));
            $browser->assertRouteIs('admin.categories.index');
        });
    }
}
