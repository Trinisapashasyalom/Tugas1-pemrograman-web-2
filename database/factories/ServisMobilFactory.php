<?php

namespace Database\Factories;

use App\Models\ServisMobil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServisMobil>
 */
class ServisMobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelanggan' => fake()->name(),
            'no_polisi' => fake()->bothify('?? #### ??'),
            'merek_mobil' => fake()->randomElement([
                'Toyota Avanza',
                'Honda Brio',
                'Mitsubishi Xpander',
                'Suzuki Ertiga'
            ]),
            'jenis_servis' => fake()->randomElement([
                'Ganti Oli',
                'Servis Mesin',
                'Servis Rem',
                'Tune Up'
            ]),
            'tanggal_servis' => fake()->date(),
            'biaya_servis' => fake()->numberBetween(100000, 1000000),
            'keluhan' => fake()->sentence(),
            'status_servis' => fake()->randomElement([
                'Menunggu',
                'Diproses',
                'Selesai'
            ]),
        ];
    }
}