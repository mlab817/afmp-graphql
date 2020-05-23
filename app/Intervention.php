<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'operating_unit_id',
        'spatial_coverage_id',
        'region_id',
        'province_id',
        'commodity_group_id',
        'commodity_id',
        'value_chain_segment_id',
        'program_id',
        'subprogram_id',
        'intervention_type',
        'intervention',
        'intervention_others',
        'unit_id',
        'intervention_details',
        'multi_year',
        'target_1',
        'target_2',
        'target_3',
        'target_4',
        'target_5',
        'target_6',
        'investment_1',
        'investment_2',
        'investment_3',
        'investment_4',
        'investment_5',
        'investment_6',
        'investment_total',
        'municipalities_1',
        'municipalities_2',
        'municipalities_3',
        'municipalities_4',
        'municipalities_5',
        'municipalities_6',
        'fund_source',
        'remarks'
    ];

    public function commodity_group(): BelongsTo
    { 
        return $this->belongsTo(CommodityGroup::class);
    }

    public function commodity(): BelongsTo
    { 
        return $this->belongsTo(Commodity::class);
    }

    public function operating_unit(): BelongsTo
    { 
        return $this->belongsTo(OperatingUnit::class);
    }

    public function spatial_coverage(): BelongsTo
    {
        return $this->belongsTo(SpatialCoverage::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function subprogram(): BelongsTo
    {
        return $this->belongsTo(Subprogram::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function value_chain_segment(): BelongsTo
    {
        return $this->belongsTo(ValueChainSegment::class);
    }

}
