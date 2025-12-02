<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Batch;

Route::get('/', function () {
    return view('front.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('batches', App\Http\Controllers\BatchController::class);
});

Route::get('/verify', function (Request $request) {
    $code = $request->query('batch_code');
    $batch = Batch::where('batch_code',$code)->first();
    if(!$batch){
        return response()->json(['valid'=>false,'message'=>'Invalid batch code']);
    }
    return response()->json([
        'valid'=>true,
        'batch_code'=>$batch->batch_code,
        'lot_number'=>$batch->lot_number,
        'expiry_date'=>$batch->expiry_date
    ]);
});