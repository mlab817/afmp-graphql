<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'units';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeds/csvs/unit.csv';
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
        DB::table($this->table)->truncate();

        parent::run();
    }
}
