#!/bin/bash

php artisan migrate --path=database/migrations/2025_05_29_025928_create_books_table.php
php artisan migrate --path=database/migrations/2025_05_29_040341_create_members_table.php
php artisan migrate --path=database/migrations/2025_06_04_093225_create_loans_table.php
php artisan migrate

