<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::paginate(10);

        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        // Create a new supplier
        Supplier::create($request->all());

        return redirect()->route('suppliers.index');
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);

        return view('suppliers.supplier_details', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        // Update the supplier
        Supplier::find($id)->update($request->all());

        return redirect()->route('suppliers.index');
    }

    public function destroy($id)
    {
        // Delete the supplier
        Supplier::find($id)->delete();

        return redirect()->route('suppliers.index');
    }

    // New method to show detailed information about a supplier in a separate page
    public function showDetails($id)
    {
        $supplier = Supplier::find($id);

        return view('supplier_details', compact('supplier'));
    }
}
