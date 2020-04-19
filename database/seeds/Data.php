<?php

use Illuminate\Database\Seeder;

class Data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Data::class, 500)->create()->each(function($post){
            $post->save();
        });
    }
}
