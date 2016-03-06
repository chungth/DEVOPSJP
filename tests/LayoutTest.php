<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LayoutTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTopNav()
    {
        $this->visit('/')
             ->seeInElement('.navbar-brand','OJIOBA')
             ->seeInElement('.navbar-right','作成');
    }
}