@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Supplier</h2>
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="Goods">Goods</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Consulting Services">Consulting Services</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="representative_name">Representative's Name:</label>
                <input type="text" class="form-control" id="representative_name" name="representative_name" required>
            </div>
            <div class="form-group">
                <label for="representative_contact_number">Representative's Contact Number:</label>
                <input type="text" class="form-control" id="representative_contact_number"
                    name="representative_contact_number" required>
            </div>
            <div class="form-group">
                <label for="representative_email">Representative's Email:</label>
                <input type="email" class="form-control" id="representative_email" name="representative_email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
