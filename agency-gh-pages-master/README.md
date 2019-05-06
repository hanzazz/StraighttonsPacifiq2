##  ลงพวกนี้ให้ครบก่อน  
- composer
- xamp (include php 7.2 > , sql)

## เตรียมตัว
- เปิด xamp start server
- สร้าง database แล้วใส่ชื่อลงใน ไฟล์ .env  ถ้าไม่มีไปหามา

```
DB_DATABASE=agency
DB_USERNAME=root
DB_PASSWORD=
```

## install 
```
composer install
composer dump-autoload 
php artisan migrate:refresh --seed

php artisan serve
```
## note
Login
username : admin@gmail.com
password  : 1234