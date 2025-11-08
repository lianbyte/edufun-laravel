<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'specialization' => 'Spesialis Interactive Multimedia'
        ]);
        
        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'specialization' => 'Spesialis Data Science'
        ]);
        
        Writer::create([
            'name' => 'Abi Firmansyah',
            'specialization' => 'Spesialis Network Security'
        ]);
    }
}
