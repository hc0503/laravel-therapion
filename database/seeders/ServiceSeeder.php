<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['title' => 'Email'],
            ['title' => 'Videoconference'],
            ['title' => 'Phone'],
            ['title' => 'Chat'],
        ];
        Service::truncate();
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
