<?php

namespace Database\Seeders;

use App\Models\Opd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyOpdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $opdData = [
            [
                'name'=>'Sekretariat Daerah',
            ],
            [
                'name'=>'Sekretariat DPRD',
            ],
            [
                'name'=>'Inspektorat',
            ],
            [
                'name'=>'Dinas Pendidikan',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Pendidikan Non Formal Sangar Kegiatan Belajar',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Satuan Pendidikan Taman Kanak-Kanak',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Satuan Pendidikan Sekolah Dasar',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Satuan Pendidikan Sekolah Menengah Pertama',
            ],

            [
                'name'=>'Dinas Kesehatan',
            ],
            [
                'name'=>'Organisasi Bersifat Khusus Rumah Sakit Umum Kota Tarakan',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Instalasi Farmasi dan Pusat Pemeliharaan Fasilitas Pelayanan Kesehatan',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Mamburungan',
            ],

            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Sebengkok',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Gunung Lingkas',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Pantai Amal',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Juata',
            ],

            [
                'name'=>'Unit Pelaksana Teknis Daerah Puskesmas Karang Rejo',
            ],
            [
                'name'=>'Dinas Pekerjaan Umum dan Tata Ruang',
            ],
            [
                'name'=>'Unit Pelaksana Teknis Daerah Laboratorium Uji Bahan Konstruksi',
            ],

        ];
        foreach($opdData as $key => $val){
            Opd::create($val);
        }
    }
}
