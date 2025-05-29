<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\AppSetting;

class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new AppSetting();
        $setting->companyName = 'Rancho Inventory';
        $setting->dashboardType = 'inventory';
        $setting->tagLine = 'Manage your Inventory, Sales, Purchases etc';
        $setting->address = '308B, Murtala Muhammad Way, Yaba, Lagos';
        $setting->phone = '+23480 6909 5729';
        $setting->email = 'semiteprofessor@gmail.com';
        $setting->website = 'https://taiwo-olapade.vercel.app';
        $setting->footer = 'Rancho Inventory copyright by GeoCodec Technologies';
        $setting->logo = 'rancho-inventory-logo.png';
        $setting->currencyId = 3;

        $setting->save();
    }
}
