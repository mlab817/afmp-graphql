<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ValueChainSegment extends Model
{
    public $incrementing = false;
    
    public function interventions(): HasMany
    {
        return $this->hasMany(Intervention::class,'commodity_id');
    }

    public function getTotalInvestmentAttribute()
    {
        return $this->interventions->sum('investment_total');
    }

    public function getCountAttribute()
    {
        return $this->interventions->count();
    }
}
