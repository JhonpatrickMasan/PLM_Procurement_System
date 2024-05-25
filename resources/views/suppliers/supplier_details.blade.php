<!-- resources/views/supplier_details.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Supplier Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" id="supplierName">{{ $supplier->name }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Category:</strong> {{ $supplier->category }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $supplier->email }}</li>
                <li class="list-group-item"><strong>Contact Number:</strong> {{ $supplier->contact_number }}</li>
                <li class="list-group-item"><strong>Representative's Name:</strong> {{ $supplier->representative_name }}</li>
                <li class="list-group-item"><strong>Representative's Contact Number:</strong> {{ $supplier->representative_contact_number }}</li>
                <li class="list-group-item"><strong>Representative's Email:</strong> {{ $supplier->representative_email }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
