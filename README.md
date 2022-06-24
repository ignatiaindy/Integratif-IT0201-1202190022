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

   ​