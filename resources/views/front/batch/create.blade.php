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
        </div>

        <!-- Lot Number -->
        <div class="input-group input-group-outline mb-4">
            <label for="lot_number" class="form-label">{{ __('admin.lot_number') }}</label>
            <input type="text" class="form-control" id="lot_number" name="lot_number" required>
        </div>

        <!-- Expiry Date -->
        <div class="mb-3">
            <label for="expiry_date" class="form-label">{{ __('admin.expiry_date') }}</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
        </div>

        <!-- Tests Count -->
        <div class="input-group input-group-outline mb-4">
            <label for="tests_count" class="form-label">{{ __('admin.tests_count') }}</label>
            <input type="number" class="form-control" id="tests_count" name="tests_count" min="1" required>
        </div>

        <!-- Description -->
        <div class="input-group input-group-outline mb-4">
            <label for="description" class="form-label">{{ __('admin.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">{{ __('admin.create_batch') }}</button>
    </form>
</div>
@endsection