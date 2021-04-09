ls
gh repo clone LaravelDaily/laravel-roles-permissions-manager
composer install
php artisan key:generate
php artisan migrate --seed
ls
pwd
clear
pwd
ls
rm -rf *
ls
git clone https://github.com/LaravelDaily/laravel-roles-permissions-manager.git
ls
composer install
php artisan key:generate
php artisan migrate --seed
php artisan make:controller ContactController --resource
php artisan make:model Contact
ls
chmod -Rf 777 storage/
setfacl -Rm u:apache:rwx storage/
ls
php artisan make:migration create_contacts_table
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan -v
php artisan route:list
ls
composer require tucker-eric/laravel-docusign
COMPOSER_MEMORY_LIMIT=-1                          exitcomposer require tucker-eric/laravel-docusign
ls
clear
COMPOSER_MEMORY_LIMIT=-1 composer require tucker-eric/laravel-docusign
php artisan vendor:publish --provider="LaravelDocusign\DocusignServiceProvider"
php artisan make:controller DocuSignController
ls
php artisan make:controller ContractController
php artisan make:model Contract
php artisan make:controller ContractsController
php artisan make:controller ContractsController --resource --model=Contract
php artisan make:migration create_contracts_table
php artisan migrate
php artisan route:list
ls
php artisan route:list
clear
php artisan make:migration add_others_to_contracts_table --table=contracts
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan migrate:rollback
php artisan migrate
ls
php artisan cache:clear
ls
composer require elibyy/tcpdf-laravel
COMPOSER_MEMORY_LIMIT=-1 composer require elibyy/tcpdf-laravel
ls
composer dump-autoload
ls
php artisan make:controller SellersController --resource
php artisan make:model Seller
php artisan make:migration create_sellers_table
php artisan migrate
ls
php artisan make:migration add_company_to_contacts_table --table=contacts
php artisan migrate
php artisan make:migration add_profileImage_to_users_table --table=users
php artisan migrate
ls
php artisan make:controller ProjectTypesController --resource --model=ProjectType
php artisan make:migration create_project_types_table
php artisan make:migration create_property_types_table
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan route:list
php artisan make:model PropertyType
php artisan make:migration add_selleremail_to_contracts_table --table=contracts
php artisan migrate:rollback
php artisan migrate
php artisan migrate:rollback
php artisan migrate
php artisan migrate:rollback
php artisan migrate
