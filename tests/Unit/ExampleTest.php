<?php

namespace Tests\Unit;

use App\Blog;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
  // use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Blog::class)->create();

        $second = factory(Blog::class)->create([
          'created_at'=>\Carbon\Carbon::now()->subMonth()
        ]);

        $blogs = Blog::archives();

        $this->assertEquals([
          [
            "year"=>$first->created_at->format('Y'),
            "month"=>$first->created_at->format('F'),
            "published"=>1

          ],

          [
            "year"=>$second->created_at->format('Y'),
            "month"=>$second->created_at->format('F'),
            "published"=>1
          ],

        ], $blogs);
    }
}
