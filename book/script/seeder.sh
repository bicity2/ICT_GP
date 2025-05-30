#!/bin/bash

php artisan db:seed --class="BooksTableSeeder"
php artisan db:seed --class="MembersTableSeeder"
php artisan db:seed --class="ReviewsTableSeeder"

