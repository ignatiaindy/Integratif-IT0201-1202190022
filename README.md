# Final Project Phase 1

**Ignatia Indreswari  1202190022 [ IT 02-01 ]**

------

## Step by Step

------

1. Install composer (harus ada php terlebih dahulu biasanya sudah ada di xampp)

   ![01_1_install_composer](assets/01_1_install_composer.PNG)

2. Download dan install Git (Git Bash)

3. Buat folder "tubes" yang kemudian dibuka melalui git

4. Install laravel, tunggu sampai selesai

   ![01_2_Install_Laravel](assets/01_2_Install_Laravel.PNG)

   ![01_3_Instalasi_Done](assets/01_3_Instalasi_Done.PNG)

5. Buka folder 'Pemrograman Integratif', lalu install composer

   ```
   composer install
   ```

   ![01_4_Install_Composer](assets/01_4_Install_Composer.PNG)

6. Kemudian ketik

   ```
   php artisan key:generate
   ```

   ![01_5_php_artisan_key_generate](assets/01_5_php_artisan_key_generate.PNG)

   Ketik code untuk mengecek apakah vs code dapat terbuka

7. Selanjutnya ketik

   ```
   php artisan serv
   ```

   ![01_5_php_artisan_serv](assets/01_6_php_artisan_serv.PNG)

8. Copy link http yang pada dalam kurung kemudian paste ke browser, dan muncul laravel 8

   ![01_7_laravel_browser](assets/01_7_laravel_browser.PNG)

------

# Final Project Phase 2

**Ignatia Indreswari  1202190022 [ IT 02-01 ]**

------

## Step by Step

------

1. Mengubah DB_DATABASE di .env sesuai dengan yang ada di php my admin

   ![02_3_env_vscode](assets/02_3_env_vscode.PNG)

   ![02_4_laravelrssfeed_db](assets/02_4_laravelrssfeed_db.PNG)

2. Membuat file RssController.php dan NewsController.php di app/http/controllers

   ```
   php artisan make:controller RssController
   php artisan make:controller NewsController
   ```

3. Menjalankan migration dan seeding

   ```
   php artisan migrate:fresh
   php artisan migrate --seed
   ```

4. Edit file NewsController.php

   ![02_1_newscontroller_vscode](assets/02_1_newscontroller_vscode.PNG)

5. Menambahkan Route di web.php

   ![02_2_webphp_vscode](assets/02_2_webphp_vscode.PNG)

6. Cek di DB apakah sudah terupdate

   ![02_5_laravelrssfeed_rss_db](assets/02_5_laravelrssfeed_rss_db.PNG)

   ![02_6_laravelrssfeed_news_db](assets/02_6_laravelrssfeed_news_db.PNG)

   ![02_7_feed_1_xml](assets/02_7_feed_1_xml.PNG)

   ![02_8_feed_2_xml](assets/02_8_feed_2_xml.PNG)

   ![02_9_feed_3_xml](assets/02_9_feed_3_xml.PNG)

------

# Final Project Phase 3

**Ignatia Indreswari  1202190022 [ IT 02-01 ]**

------

## Step by Step

------

Menggunakan 3 RSS
Esport : https://esportv.org/rss/category/valorant

Korea : https://www.koreatimes.co.kr/www/rss/entertainment.xml

United Nation : https://news.un.org/feed/subscribe/en/news/region/middle-east/feed/rss.xml

1. Membuat file blade.php di recources/views

   ```
   header.blade.php
   footer.blade.php
   esport.blade.php
   korea.blade.php
   united.blade.php
   ```

   ![03_1_header_vscode](assets/03_1_header_vscode.PNG)

   ![03_2_footer_vscode](assets/03_2_footer_vscode.PNG)

   ![03_3_esport_vscode](assets/03_3_esport_vscode.PNG)

2. Menambahkan Route di web.php

   ![03_4_route_webphp_vscode](assets/03_4_route_webphp_vscode.PNG)

3. Menambahkan beberapa Controller

   ```
   FeedController.php
   EsController.php //untuk esport
   KoController.php //untuk korea
   UnController.php //untuk united nation
   ```

   ![03_5_feedcontroller_vscode](assets/03_5_feedcontroller_vscode.PNG)
   ![03_6_escontroller_vscode](assets/03_6_escontroller_vscode.PNG)
   ![03_7_kocontroller_vscode](assets/03_7_kocontroller_vscode.PNG)
   ![03_8_uncontroller_vscode](assets/03_8_uncontroller_vscode.PNG)

4. Tampilan dari InFeed

   ![03_9_home_white_infeed](assets/03_9_home_white_infeed.PNG)
   ![03_10_home_black_infeed](assets/03_10_home_black_infeed.PNG)
   ![03_11_esport_infeed](assets/03_11_esport_infeed.PNG)
   ![03_12_korea_infeed](assets/03_12_korea_infeed.PNG)
   ![03_13_united_infeed](assets/03_13_united_infeed.PNG)

------
