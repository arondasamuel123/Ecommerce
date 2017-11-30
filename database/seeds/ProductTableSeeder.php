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
        DB::table('products')->insert([
            'name' => 'Adidas Nemeziz FG',
            'slug' => 'adidas-nemeziz-fg',
            'description' => 'Unstoppable agility and immeasurable grip, addidas nemeziz ocean storm pack',
            'price' => 250,
            'image' => 'boots_nemeziz.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Mercurial CR7',
            'slug' => 'mercurial-cr7',
            'description' => 'Like the best player in the world you need the best boots, so here they are',
            'price' => 260,
            'image' => 'boots_cr7.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Hypervenom Phantom 3',
            'slug' => ' phantom-3',
            'description' => 'Explosive attack, Unstoppable power. New Hypervenom lock in let loose pack',
            'price' => 187.99,
            'image' => 'boots_hypervenom.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Magista Obra 2',
            'slug' => 'obra-2',
            'description' => 'Unrivalled playmaking capabilities. Nike Magista Obra 2',
            'price' => 120,
            'image' => 'boots_magista.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas X',
            'slug' => 'adidas-x',
            'description' => 'Killer instincts infront of goal',
            'price' => 216.99,
            'image' => 'boots_x.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Adidas ACE',
            'slug' => 'adidas-ace',
            'description' => 'Stylish playmaking. Lke Paul Pogba a pair of this can yours now!',
            'price' => 215,
            'image' => 'boots_ace.jpg',
        ]);
        
    
    }
}
