<?php

use Illuminate\Database\Seeder;
use App\Model\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog::class, 15)->create();
    }
}
