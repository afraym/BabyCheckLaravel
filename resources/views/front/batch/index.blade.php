@extends('layouts.front')

@section('content')
<div class="container mt-5">
    <h2>{{ __('admin.all_batches') }}</h2>

    @if($batches->isEmpty())
        <p>{{ __('admin.no_batches_found') }}</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ __('admin.batch_code') }}</th>
                    <th>{{ __('admin.lot_number') }}</th>
                    <th>{{ __('admin.expiry_date') }}</th>
                    <th>{{ __('admin.tests_count') }}</th>
                    <th>{{ __('admin.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($batches as $batch)
                    <tr>
                        <td>{{ $batch->batch_code }}</td>
                        <td>{{ $batch->lot_number }}</td>
                        <td>{{ $batch->expiry_date }}</td>
                        <td>{{ $batch->tests_count }}</td>
                        <td>
                            <a href="{{ route('batches.show', $batch->id) }}" class="btn btn-info btn-sm">{{ __('admin.view') }}</a>
                            <a href="{{ route('batches.edit', $batch->id) }}" class="btn btn-warning btn-sm">{{ __('admin.edit') }}</a>
                            <form action="{{ route('batches.destroy', $batch->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('admin.delete_confirmation') }}')">{{ __('admin.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<div class="d-flex justify-content-center">
{{ $batches->links() }}
</div>
@endsection