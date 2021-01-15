<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user = User::create('name'=>'test1','lastname'=>'test2');
    }
}
