@extends('layouts.front')

@section('content')
<div class="container mt-5">
    <h2>{{ __('admin.create_new_batch') }}</h2>
    <form action="{{ route('batches.store') }}" method="POST">
        @csrf

        <!-- Batch Code -->
        <div class="input-group input-group-outline mb-4">
            <label for="batch_code" class="form-label">{{ __('admin.batch_code') }}</label>
            <input type="text" class="form-control" id="batch_code" name="batch_code" required>
        @error('batch_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Lot Number -->
        <div class="input-group input-group-outline mb-4">
            <label for="lot_number" class="form-label">{{ __('admin.lot_number') }}</label>
            <input type="text" class="form-control" id="lot_number" name="lot_number" >
            @error('lot_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Expiry Date -->
        <div class="mb-3">
            <div class="col-2">
            <label for="expiry_date" class="form-label">{{ __('admin.expiry_date') }}</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
            @error('expiry_date')
                    <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        </div>

        <!-- Tests Count -->
        <div class="input-group input-group-outline mb-4">
            <label for="tests_count" class="form-label">{{ __('admin.tests_count') }}</label>
            <input type="number" class="form-control" id="tests_count" name="tests_count" min="1" >
            @error('tests_count')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description -->
        <div class="input-group input-group-outline mb-4">
            <label for="description" class="form-label">{{ __('admin.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">{{ __('admin.create_batch') }}</button>
    </form>
</div>
@endsection