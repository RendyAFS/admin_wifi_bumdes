<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID'); // Set Faker locale to Indonesian

        return [
            'nama_pelanggan' => $faker->name,
            'nominal_bayar' => (string) $faker->numberBetween(0),
            'tgl_bayar' => $this->randomTglBayar(),
            'status' => $faker->randomElement(['Sudah Bayar', 'Belum Bayar', 'Cicil']),
            'keterangan' => $faker->sentence(10),
        ];
    }

    private function randomTglBayar()
    {
        // Generate a random date for the 20th of any month in the current year
        $year = now()->year;
        $month = $this->faker->numberBetween(1, 12);
        return Carbon::create($year, $month, 20)->format('Y-m-d');
    }
}
