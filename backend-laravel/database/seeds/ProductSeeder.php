<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Paracetamol',
                'description' => 'Obat pereda nyeri dan demam',
                'price' => 5000,
                'thumbnail' => 'paracetamol.jpg',
            ],
            [
                'title' => 'Amoxicillin',
                'description' => 'Antibiotik untuk infeksi bakteri',
                'price' => 15000,
                'thumbnail' => 'amoxicillin.jpg',
            ],
        ]);
    }
}