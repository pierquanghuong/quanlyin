## install for dev 
# clone project
git clone https://github.com/pierquanghuong/quanlyin.git quanlyin


______ update codeignter - option __________________________________
composer update                                                    |
cp vendor/codeigniter4/framework/public/index.php public/index.php  |
cp vendor/codeigniter4/framework/spark spark                        |
____________________________________________________________________|

cd quanlyin/
cp env .env - edit config
- create virtual domain to public/
Configuration
composer require simpletine/hmvc-shield
php spark simpletine:setup

## information https://github.com/Simpletine/CodeIgniter4-HMVC-Shield