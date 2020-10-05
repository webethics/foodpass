# filter-laravel-admin

Clone the project where you want to setup it using the following command

git clone https://github.com/webethics/filter-laravel-admin.git

run composer update

change the sample.env file to .env file and update your databse details

Once the database is create run the following commands to get the default data

php artisan migrate

php artisan db:seed --class=DatabaseSeeder

Use the following commands to get logged into the accounts:

Admin

Username : admin@admin.com
Password: Teamwebethics3!

User

Username : user@user.com
Password: Teamwebethics3!