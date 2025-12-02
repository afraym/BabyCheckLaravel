<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['expiry_date','batch_code','description',
        'tests_count','name','lot_number','kit_type','manufacture_date',
        'received_date','storage_temp','sensitivity','qc_passed',
        'qc_date','status'];

    public function qrCodes()
    {
        return $this->hasMany(QrCodeEntry::class, 'batch_id');
    }

    public function latestQrCode()
    {
        return $this->hasOne(QrCodeEntry::class, 'batch_id')->latestOfMany();
    }
}
