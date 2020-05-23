<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        
        $this->call(OperatingUnitsTableSeeder::class);

        $this->call(CommoditiesTableSeeder::class);
        $this->call(CommodityGroupsTableSeeder::class);

        $this->call(SpatialCoveragesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);

        $this->call(ValueChainSegmentsTableSeeder::class);

        $this->call(ProgramsTableSeeder::class);
        $this->call(SubprogramsTableSeeder::class);

        $this->call(UnitsTableSeeder::class);

        $this->call(InterventionsTableSeeder::class);
    }
}
