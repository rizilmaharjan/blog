<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $data)
        {
            SocialMedia::firstOrcreate(
               ['name' => $data[0]],
                ['color' =>$data[1]]
            );
        }
    }

    private function data(): array
    {
        return [
            ['Facebook',
            '#3b5999',],
            ['Twitter',
            '#55acee',],
            ['Instagram',
            '#e4405f',]

        ];  
    }
}
