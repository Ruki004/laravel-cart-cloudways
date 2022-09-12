<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() /*uses array of product method*/
    {
        $products=[
            [ 
            //define columns name & add values
              'name'=>'Apple Macbook Pro 16',
              'details'=>'Apple M1 Pro, 16 GPU , 16 GB, 512 GB SSD ',
              'description'=>'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — 
              you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, 
              the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.',
              'brand'=>'Apple',
              'price'=>1999,
              'shipping_cost'=>25,
              'image_path'=>'storage/pro.jpg'

            ],
            [
            'name'=>'Samsung Galaxy Pro',
            'details'=>'13.3inch, 8gb, DDR4 SDRAM, 256GB',
            'description'=>'PC power that’s smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. 
            Finish important projects,  download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.',
            'brand'=>'Samsung',
            'price'=>1400,
            'shipping_cost'=>40,
            'image_path'=>'storage/pro2.jpg'
            ],

          ];
            foreach ($products as $key => $value) {
                Product::create($value);//boolean 
            }
    
    }
}
