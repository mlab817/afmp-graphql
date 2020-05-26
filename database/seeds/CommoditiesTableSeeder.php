<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Console\Command;
use Illuminate\Database\Seeder;

class CommoditiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'commodities';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'\database\seeds\csvs\commodity.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        // DB::table($this->table)->truncate();

        $this->command->info('seeding commodities...');

        parent::run();
    }
}
