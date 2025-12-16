<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\QrCodeEntry;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::orderBy('created_at', 'desc')->paginate(10); // Fetch all batches
        return view('front.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'batch_code' => 'required|unique:batches,batch_code',
            'lot_number' => 'string|nullable',
            'expiry_date' => 'date|nullable',
            'tests_count' => 'integer|min:1|nullable',
            'description' => 'nullable|string',
        ]);

        $batch = Batch::create($data);

        // Generate verify URL with batch code as query parameter
        $verifyUrl = url('/verify?batch_code=' . urlencode($batch->batch_code));

        $png = QrCode::format('png')->size(300)->margin(2)->generate($verifyUrl);
        $filename = 'qr_codes/batch_'.$batch->id.'_'.time().'.png';
        Storage::disk('public')->put($filename, $png);

        QrCodeEntry::create([
            'batch_id' => $batch->id,
            'qr_code' => $filename,
            'description' => 'Authenticity QR',
        ]);

        return redirect()->route('batches.show', $batch->id)->with('success', 'Batch created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        return view('front.batch.show', compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batches.index')->with('success', 'Batch deleted successfully.');
    }
}
