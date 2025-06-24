<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DropAllTables extends Command
{
    protected $signature = 'db:drop-all-tables';
    protected $description = 'すべてのテーブルを削除します（外部キー制約も無視）';

    public function handle()
    {
        Schema::disableForeignKeyConstraints();

        $tables = DB::select('SHOW TABLES');
        $database = DB::getDatabaseName();
        $key = "Tables_in_$database";

        foreach ($tables as $table) {
            $tableName = $table->$key;
            Schema::drop($tableName);
            $this->info("Dropped table: $tableName");
        }

        Schema::enableForeignKeyConstraints();

        $this->info('すべてのテーブルを削除しました。');
        return 0;
    }
}
