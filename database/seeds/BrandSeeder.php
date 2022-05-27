<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            "Abarth",
            "Alfa Romeo",
            "Aston Martin",
            "Audi",
            "Bentley",
            "BMW",
            "Chevrolet",
            "Chrysler",
            "Citroën",
            "Dacia",
            "Daihatsu",
            "DS",
            "Fiat",
            "Ford",
            "Honda",
            "Hyundai",
            "Iveco",
            "Jaguar",
            "Jeep",
            "Kia",
            "Lamborghini",
            "Lancia",
            "Land Rover",
            "Lexus",
            "Lotus",
            "Mazda",
            "Mercedes-Benz",
            "MG",
            "Mini",
            "Mitsubishi",
            "Nissan",
            "Opel",
            "Peugeot",
            "Porsche",
            "Renault",
            "Rover",
            "Saab",
            "Seat",
            "Skoda",
            "Smart",
            "Subaru",
            "Suzuki",
            "Tesla",
            "Toyota",
            "Volkswagen",
            "Volvo"
        ];

        foreach ($brands as $brand)
            DB::table('brands') -> insert([
                'name' => $brand,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
