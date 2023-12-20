<?php

namespace Database\Seeders;

use App\Models\mijeng;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mijeng')->insert([
            'Nama' => 'Miftahul Fauzan',
            'NIM' => '2225230133',
            'Email' => '2225230133@gmail.com',
            'Jabatan' => 'Ketua Umum',
        ]);
    }
}
