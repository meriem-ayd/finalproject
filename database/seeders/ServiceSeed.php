<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nom_service' => 'medeine_interne',
                'email' => 'med@gmail.com',
                'password' => 'med12345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom_service' => 'urgences',
                'email' => 'urg@gmail.com',
                'password' => 'urg12345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom_service' => 'cardiologie',
                'email' => 'card@gmail.com',
                'password' => 'car12345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nom_service' => 'oncologie',
                'email' => 'onco@gmail.com',
                'password' => 'onco12345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

            ];

        Service::insert($categories);    }
}
