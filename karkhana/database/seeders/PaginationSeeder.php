<?php

namespace Database\Seeders;

use App\Models\Pagination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaginationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pagination::factory(500)->create();
        //    Pagination::create(
        //     ['name'=>"meet"],
        //     ['name'=>"ddd"],
        //     ['name'=>"dd"],
        //     ['name'=>"ghjgh"],
        //     ['name'=>"gfhj"],
        //     ['name'=>"meefgjgft"],
        //     ['name'=>"mfgjdeet"],

        //    );
    }
}
