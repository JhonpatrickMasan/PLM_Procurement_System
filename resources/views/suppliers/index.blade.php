@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #ffffff; border-radius: 20px; padding: 20px; margin-right:50px;">
        <h1 class="my-4 text-center" style="margin-top:50px; font-weight: bold; font-size: 2.5rem;">Suppliers' Database</h1>

        <div class="mb-3" style="margin-left: 40px; margin-top: 100px; border-radius: 15px; overflow: hidden;">
            <div class="mb-3 d-flex justify-content-between align-items-center"
                style="border-radius: 15px; overflow: hidden;">
                <input type="text" class="mr-2 form-control" placeholder="Search by Name..." id="search-name"
                    style="border-radius: 15px;">
                <select class="mr-2 form-control" id="search-category" style="border-radius: 15px;">
                    <option value="">Category...</option>
                    <option value="Goods">Goods</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Consulting Services">Consulting Services</option>
                </select>
                <button onclick="window.location.href='{{ route('suppliers.create') }}'" class="btn btn-lg"
                    style="background-color: #39A95F; color: #fff; width: 120px; border-radius: 15px; margin-left: 50px; margin-bottom:50px;">
                    <i class="mr-2 fas fa-user-plus"></i>Add
                </button>
            </div>
        </div>

        <div class="table-responsive" style="width: 1073px; margin-left:30px;">
            <table id="table" class="table mx-auto text-center table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="border">No.</th>
                        <th class="border">Supplier ID</th>
                        <th class="border">Supplier Name</th>
                        <th class="border">Category</th>
                        <th class="border">Edit Information</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    @foreach ($suppliers as $supplier)
                        <tr>
                            <td class="text-center border">
                                {{ $loop->iteration + $suppliers->perPage() * ($suppliers->currentPage() - 1) }}</td>
                            <td class="text-center border">{{ $supplier->id }}</td>
                            <td class="text-center border"><a
                                    href="{{ route('suppliers.show', $supplier->id) }}">{{ $supplier->name }}</a></td>
                            <td class="text-center border">{{ $supplier->category }}</td>
                            <td class="text-center border">
                                <form action="{{ route('suppliers.edit', $supplier->id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success rounded-pill btn-lg"
                                        style="width: 150px; background-color: #3C94C5; color: #ffffff; border-radius: 15px;">
                                        ✎ <!-- Unicode character for pencil icon -->
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        body {
            overflow: hidden;
        }

        .table th,
        .table td {
            border: 1px solid black;
            vertical-align: middle;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        .btn-primary,
        .btn-danger {
            width: 80px;
            /* Adjust the width of the button as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tableBody = document.getElementById('table-body');
            var allRows = Array.from(tableBody.rows);

            function filterSuppliers() {
                var searchQuery = document.getElementById('search-name').value.toLowerCase();
                var searchCategory = document.getElementById('search-category').value.toLowerCase();

                tableBody.innerHTML = '';

                allRows.forEach(function(row) {
                    var name = row.cells[2].textContent.toLowerCase();
                    var category = row.cells[3].textContent.toLowerCase();

                    if ((name.includes(searchQuery) || searchQuery === '') &&
                        (category.includes(searchCategory) || searchCategory === '')) {
                        tableBody.appendChild(row);
                    }
                });
            }

            document.getElementById('search-name').addEventListener('input', filterSuppliers);
            document.getElementById('search-category').addEventListener('change', filterSuppliers);
        });
    </script>
@endsection
