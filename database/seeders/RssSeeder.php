<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            // 'name' => 'esport',
            // 'url' => "https://esportv.org/rss/category/valorant"

            // 'name' => 'korea',
            // 'url' => "https://www.koreatimes.co.kr/www/rss/entertainment.xml"

            'name' => 'news',
            'url' => "https://news.un.org/feed/subscribe/en/news/region/middle-east/feed/rss.xml"
        ]);
    }
}
