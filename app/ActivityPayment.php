<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityPayment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['activity_id', 'activity_payment_status_id', 'amount', 'effect', 'created_by', 'updated_by'];

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) \Webpatser\Uuid\Uuid::generate(config('vars.uuid_ver'));
        });
    }

    /**
     *  Create new resource
     */
    public static function store($inputs)
    {
        return self::create($inputs);
    }

    /**
     *  Update existing resource
     */
    public static function edit($inputs, $resource)
    {
        return self::where('id', $resource)->update($inputs);
    }

    /**
     *  Delete existing resource
     */
    public static function remove($resource)
    {
        return self::where('id', $resource)->delete();
    }

    /**
     *  Get a specific resource
     */
    public static function getBy($by, $resource)
    {
        return self::where($by, $resource)->first();
    }

    /**
     *  Relationship with users
     */
    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');

    }

    /**
     *  Relationship with Activity
     */
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }

    /**
     *  Relationship with Activity Payment Status
     */
    public function activityPaymentStatus()
    {
        return $this->belongsTo('App\ActivityPaymentStatus');
    }
}
