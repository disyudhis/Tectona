<?php

namespace App\Models\Entity;

use App\Models\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rack extends AppModel
{
    use HasFactory, SoftDeletes;

    const STATUS_AVAILABLE = "AVAILABLE";
    const STATUS_FULL = "FULL";
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'racks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        //
    ];

    public function getStatusColorAttribute() {
        if($this->status = self::STATUS_AVAILABLE){
            return 'success';
        }else{
            return 'danger';
        }
    }
}