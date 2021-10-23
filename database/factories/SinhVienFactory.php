<?php

namespace Database\Factories;

use App\Models\SinhVien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SinhVienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SinhVien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'ho' => $this->faker->lastName(),
            'lop' => mt_rand(1, 12),
            'hocluc' => mt_rand(1, 5),
        ];
    }
}
