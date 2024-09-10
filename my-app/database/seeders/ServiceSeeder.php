<?php
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Web Development',
            'description' => 'We offer custom web development services.',
            'status' => 1
        ]);

        Service::create([
            'name' => 'SEO Optimization',
            'description' => 'Professional SEO services to improve your rankings.',
            'status' => 1
        ]);
    }
}
