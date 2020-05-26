<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->unsignedInteger('operating_unit_id')->nullable();
            $table->unsignedInteger('spatial_coverage_id')->nullable();
            $table->unsignedInteger('region_id')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->unsignedInteger('commodity_group_id')->nullable();
            $table->unsignedInteger('commodity_id')->nullable();
            $table->unsignedInteger('value_chain_segment_id')->nullable();
            $table->unsignedInteger('program_id')->nullable();
            $table->unsignedInteger('subprogram_id')->nullable();
            $table->text('intervention_type')->nullable();
            $table->text('intervention')->nullable();
            $table->text('intervention_others')->nullable();
            $table->text('intervention_details')->nullable();
            $table->boolean('multi_year')->default(false);
            $table->unsignedInteger('unit_id')->nullable();
            $table->decimal('target_1',14,2)->default(0);
            $table->decimal('target_2',14,2)->default(0);
            $table->decimal('target_3',14,2)->default(0);
            $table->decimal('target_4',14,2)->default(0);
            $table->decimal('target_5',14,2)->default(0);
            $table->decimal('target_6',14,2)->default(0);
            $table->decimal('investment_1',14,2)->default(0);
            $table->decimal('investment_2',14,2)->default(0);
            $table->decimal('investment_3',14,2)->default(0);
            $table->decimal('investment_4',14,2)->default(0);
            $table->decimal('investment_5',14,2)->default(0);
            $table->decimal('investment_6',14,2)->default(0);
            $table->decimal('investment_total',14,2)->default(0);
            $table->unsignedInteger('municipalities_1')->default(0);
            $table->unsignedInteger('municipalities_2')->default(0);
            $table->unsignedInteger('municipalities_3')->default(0);
            $table->unsignedInteger('municipalities_4')->default(0);
            $table->unsignedInteger('municipalities_5')->default(0);
            $table->unsignedInteger('municipalities_6')->default(0);
            $table->text('fund_source')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('commodity_group_id')->references('id')->on('commodity_groups')->onDelete('SET NULL');
            $table->foreign('commodity_id')->references('id')->on('commodities')->onDelete('SET NULL');
            $table->foreign('spatial_coverage_id')->references('id')->on('spatial_coverages')->onDelete('SET NULL');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('SET NULL');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('SET NULL');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('SET NULL');
            $table->foreign('subprogram_id')->references('id')->on('subprograms')->onDelete('SET NULL');
            $table->foreign('value_chain_segment_id')->references('id')->on('value_chain_segments')->onDelete('SET NULL');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('SET NULL');
            $table->foreign('operating_unit_id')->references('id')->on('operating_units')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
