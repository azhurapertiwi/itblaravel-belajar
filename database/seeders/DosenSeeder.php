<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::Create([
            'nama'=>'Mustazihim',
            'nidn'=>'0191019',
            'alamat'=>'Bukit Timah',
            'hp'=>'089797986',
        ]);

        Dosen::Create([
            'nama'=>'Merina',
            'nidn'=>'234234',
            'alamat'=>'Sudirman',
            'hp'=>'08u76544347',
        ]);

        Dosen::Create([
            'nama'=>'Desianti',
            'nidn'=>'8654334',
            'alamat'=>'sukajadi',
            'hp'=>'084272837',
        ]);

        Dosen::Create([
            'nama'=>'Gellysa',
            'nidn'=>'635474',
            'alamat'=>'Bukit datuk',
            'hp'=>'085437465',
        ]);

        Dosen::Create([
            'nama'=>'Tri yul',
            'nidn'=>'76543',
            'alamat'=>'Bukit Batrem',
            'hp'=>'08345677',
        ]);

    }
}