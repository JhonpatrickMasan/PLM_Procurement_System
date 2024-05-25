@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Supplier</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $supplier->contact_number }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $supplier->email }}" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Consulting Services" {{ $supplier->category == 'Consulting Services' ? 'selected' : '' }}>Consulting Services</option>
                    <option value="Goods" {{ $supplier->category == 'Goods' ? 'selected' : '' }}>Goods</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="representative_name">Representative's Name:</label>
                <input type="text" class="form-control" id="representative_name" name="representative_name" value="{{ $supplier->representative_name }}" required>
            </div>

            <div class="form-group">
                <label for="representative_contact_number">Representative's Contact Number:</label>
                <input type="text" class="form-control" id="representative_contact_number" name="representative_contact_number" value="{{ $supplier->representative_contact_number }}" required>
            </div>

            <div class="form-group">
                <label for="representative_email">Representative's Email:</label>
                <input type="email" class="form-control" id="representative_email" name="representative_email" value="{{ $supplier->representative_email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
