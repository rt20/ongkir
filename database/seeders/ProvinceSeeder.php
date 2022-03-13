<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'key' => 'e9f75637b977bfbe11cd0247288275e7'
        ])->get('https://api.rajaongkir.com/starter/province');
        $provinces = $response['rajaongkir']['results'];

        foreach($provinces as $province){
            $data_province[] = [
                'id' => $province['province_id'],
                'province' => $province['province']
            ];
        }
        Province::Insert($data_province);
    }
}
