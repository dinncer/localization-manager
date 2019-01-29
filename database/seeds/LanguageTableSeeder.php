<?php

use Illuminate\Database\Seeder;
use App\Models\Language;
use Carbon\Carbon;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run language database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Turkish',  'language_code' => 'tr', 'country_code' => 'tr-TR', 'created_at' => Carbon::now()],
            ['name' => 'English',  'language_code' => 'en', 'country_code' => 'en-US', 'created_at' => Carbon::now()],
            ['name' => 'Germany',  'language_code' => 'de', 'country_code' => 'de-DE', 'created_at' => Carbon::now()],
            ['name' => 'Italian',  'language_code' => 'it', 'country_code' => 'it-IT', 'created_at' => Carbon::now()],
            ['name' => 'Japanese', 'language_code' => 'ja', 'country_code' => 'ja-JP', 'created_at' => Carbon::now()],
            ['name' => 'Russian',  'language_code' => 'ru', 'country_code' => 'ru-RU', 'created_at' => Carbon::now()],
        ];

        Language::insert($languages);
    }
}
