## install for dev 
# clone project
# git clone https://github.com/pierquanghuong/quanlyin.git quanlyin
# create virtual domain to public/

## ______ update codeignter - option __________________________________
composer update                                                    |
cp vendor/codeigniter4/framework/public/index.php public/index.php  |
cp vendor/codeigniter4/framework/spark spark                        |
____________________________________________________________________|

cd quanlyin/
cp env .env - edit config

## Configuration - option
composer require simpletine/hmvc-shield
php spark simpletine:setup

# run migrate database: php spark migrate --all

## information https://github.com/Simpletine/CodeIgniter4-HMVC-Shield