<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $signs = ['hearts', 'diamonds', 'spades', 'clubs'];
        foreach ($signs as $sign) {
            for ($val = 1; $val<= 12; $val++) {
                if ($val === 8 || $val === 9) {
                    continue;
                }
                Card::create([
                    'value' => $val, 
                    'suit' => $sign,
                ]);
            }
        };
    }
}
