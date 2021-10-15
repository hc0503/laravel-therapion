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
        $type = ['SINGLE', 'PROGRAM'];
        $services = [
            ['title' => 'E-mail Counseling', 'type' => $type[0]],
            ['title' => 'Chat Counseling', 'type' => $type[0]],
            ['title' => 'Videoconference Counseling', 'type' => $type[0]],
            ['title' => 'Phone Counseling', 'type' => $type[0]],
            ['title' => 'Program One: 4 x E-mail Counseling', 'type' => $type[1]],
            ['title' => 'Program Two: 4 x Chat Counseling', 'type' => $type[1]],
            ['title' => 'Program Three: 4 x Videoconference Counseling', 'type' => $type[1]],
        ];
        Service::truncate();
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
