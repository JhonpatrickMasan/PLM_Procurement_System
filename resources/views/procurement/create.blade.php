<!-- resources/views/procurement/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Procurement</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Add New Procurement</h1>
        <form action="{{ route('procurement.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Code (PAP)</label>
                <input type="text" name="code" id="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="procurement_project">Procurement Project</label>
                <input type="text" name="procurement_project" id="procurement_project" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pmo">PMO</label>
                <input type="text" name="pmo" id="pmo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="procurement_act">Procurement Act</label>
                <input type="text" name="procurement_act" id="procurement_act" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mop">MOP</label>
                <input type="text" name="mop" id="mop" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pre_pro_conference">Pre-Pro Conference</label>
                <input type="date" name="pre_pro_conference" id="pre_pro_conference" class="form-control">
            </div>
            <div class="form-group">
                <label for="ads">ADS</label>
                <input type="date" name="ads" id="ads" class="form-control">
            </div>
            <div class="form-group">
                <label for="eligibility_check">Eligibility Check</label>
                <input type="date" name="eligibility_check" id="eligibility_check" class="form-control">
            </div>
            <div class="form-group">
                <label for="sub">SUB</label>
                <input type="date" name="sub" id="sub" class="form-control">
            </div>
            <div class="form-group">
                <label for="bid_eval">Bid Eval</label>
                <input type="date" name="bid_eval" id="bid_eval" class="form-control">
            </div>
            <div class="form-group">
                <label for="post_qual">Post Qual</label>
                <input type="date" name="post_qual" id="post_qual" class="form-control">
            </div>
            <div class="form-group">
                <label for="bac_resolution_award">BAC Resolution Award</label>
                <input type="date" name="bac_resolution_award" id="bac_resolution_award" class="form-control">
            </div>
            <div class="form-group">
                <label for="notice_award">Notice Award</label>
                <input type="date" name="notice_award" id="notice_award" class="form-control">
            </div>
            <div class="form-group">
                <label for="contract_signing">Contract Signing</label>
                <input type="date" name="contract_signing" id="contract_signing" class="form-control">
            </div>
            <div class="form-group">
                <label for="notice_proceed">Notice Proceed</label>
                <input type="date" name="notice_proceed" id="notice_proceed" class="form-control">
            </div>
            <div class="form-group">
                <label for="delivery">Delivery</label>
                <input type="date" name="delivery" id="delivery" class="form-control">
            </div>
            <div class="form-group">
                <label for="inspection">Inspection</label>
                <input type="date" name="inspection" id="inspection" class="form-control">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" step="0.01" name="total" id="total" class="form-control">
            </div>
            <div class="form-group">
                <label for="mooe">MOOE</label>
                <input type="number" step="0.01" name="mooe" id="mooe" class="form-control">
            </div>
            <div class="form-group">
                <label for="co">CO</label>
                <input type="number" step="0.01" name="co" id="co" class="form-control">
            </div>
            <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Procurement</button>
        </form>
    </div>
</body>

</html>
