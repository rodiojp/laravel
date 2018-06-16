<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
   
    public function testFirstTest()
    {
        $value = 1;
        $this->assertTrue( $value === 1, 'Value should be 1');
    }

    public function testTitlesModelCount()
    {
        $titles= new Title();
        $this->assertTrue( count($titles->all()) === 6, 'It should have 6 titles');
    }

    public function testTitlesShouldBeProfessor()
    {
        $titles= new Title();
        $titles_array = $titles->all();
        $this->assertEquals("Professor", array_pop($titles_array) , "Titles: last element should be 'Professor'");
    }
}