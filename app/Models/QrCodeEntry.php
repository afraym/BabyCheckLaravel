<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeEntry extends Model
{
    protected $table = 'qr_codes';
    protected $fillable = ['batch_id','qr_code','description'];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
