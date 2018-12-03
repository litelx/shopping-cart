<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'Harry potter',
            'description' => 'Super cool book story a specially as a child',
            'price' => 10.5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'Harry potter 2',
            'description' => 'Continuous of super cool book story a specially as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'Game over',
            'description' => 'Super cool book story a specially as a child',
            'price' => 11.5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'Boys and Girls',
            'description' => 'Super cool book story a specially as a child',
            'price' => 9.5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'Hakuna matata',
            'description' => 'It says don\'t worry',
            'price' => 12.5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://img.goldposter.com/2015/05/Harry-Potter-and-the-Deathly-Hallows-Part-2_poster_goldposter_com_14.jpg?x-oss-process=image/resize,m_fill,h_800,w_585/quality,q_80',
            'title' => 'marry forever',
            'description' => 'Gay song of gay singer',
            'price' => 15.9
        ]);
        $product->save();
    }
}
