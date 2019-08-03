<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class profile extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        //$this->assertTrue(true);
        $user = factory(\App\User::class)->make();
        $user->save();
        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associate($user);
        $this->assertTrue($profile->save());
    }
}
