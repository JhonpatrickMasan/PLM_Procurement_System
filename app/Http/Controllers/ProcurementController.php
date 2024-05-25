<?php

// app/Http/Controllers/ProcurementController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procurement;

class ProcurementController extends Controller
{
    public function index()
    {
        $procurements = Procurement::all();
        return view('procurement.monitoring', compact('procurements'));
    }

    public function create()
    {
        return view('procurement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:procurements,code',
            'procurement_project' => 'required',
            'pmo' => 'required',
            'procurement_act' => 'required',
            'mop' => 'required',
            'total' => 'nullable|numeric',
            'mooe' => 'nullable|numeric',
            'co' => 'nullable|numeric',
        ]);

        $procurement = new Procurement([
            'code' => $request->code,
            'procurement_project' => $request->procurement_project,
            'pmo' => $request->pmo,
            'procurement_act' => $request->procurement_act,
            'mop' => $request->mop,
            'pre_pro_conference' => $request->pre_pro_conference,
            'ads' => $request->ads,
            'eligibility_check' => $request->eligibility_check,
            'sub' => $request->sub,
            'bid_eval' => $request->bid_eval,
            'post_qual' => $request->post_qual,
            'bac_resolution_award' => $request->bac_resolution_award,
            'notice_award' => $request->notice_award,
            'contract_signing' => $request->contract_signing,
            'notice_proceed' => $request->notice_proceed,
            'delivery' => $request->delivery,
            'inspection' => $request->inspection,
            'total' => $request->total,
            'mooe' => $request->mooe,
            'co' => $request->co,
            'remarks' => $request->remarks,
        ]);

        $procurement->save();

        return redirect()->route('procurement.monitoring')->with('success', 'Procurement added successfully.');
    }
}