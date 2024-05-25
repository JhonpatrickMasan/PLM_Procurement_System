<!-- resources/views/procurement/monitoring.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement Monitoring</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Procurement Monitoring</h1>
        <a href="{{ route('procurement.create') }}" class="mb-3 btn btn-primary">Add New Procurement</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Created</th>
                    <th>Code</th>
                    <th>Procurement Project</th>
                    <th>PMO</th>
                    <th>Procurement Act</th>
                    <th>MOP</th>
                    <th>Pre-Pro Conference</th>
                    <th>ADS</th>
                    <th>Eligibility Check</th>
                    <th>SUB</th>
                    <th>Bid Eval</th>
                    <th>Post Qual</th>
                    <th>BAC Resolution Award</th>
                    <th>Notice Award</th>
                    <th>Contract Signing</th>
                    <th>Notice Proceed</th>
                    <th>Delivery</th>
                    <th>Inspection</th>
                    <th>Total</th>
                    <th>MOOE</th>
                    <th>CO</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($procurements as $procurement)
                    <tr>
                        <td>{{ $procurement->id }}</td>
                        <td>{{ $procurement->created_at }}</td>
                        <td>{{ $procurement->code }}</td>
                        <td>{{ $procurement->procurement_project }}</td>
                        <td>{{ $procurement->pmo }}</td>
                        <td>{{ $procurement->procurement_act }}</td>
                        <td>{{ $procurement->mop }}</td>
                        <td>{{ $procurement->pre_pro_conference }}</td>
                        <td>{{ $procurement->ads }}</td>
                        <td>{{ $procurement->eligibility_check }}</td>
                        <td>{{ $procurement->sub }}</td>
                        <td>{{ $procurement->bid_eval }}</td>
                        <td>{{ $procurement->post_qual }}</td>
                        <td>{{ $procurement->bac_resolution_award }}</td>
                        <td>{{ $procurement->notice_award }}</td>
                        <td>{{ $procurement->contract_signing }}</td>
                        <td>{{ $procurement->notice_proceed }}</td>
                        <td>{{ $procurement->delivery }}</td>
                        <td>{{ $procurement->inspection }}</td>
                        <td>{{ $procurement->total }}</td>
                        <td>{{ $procurement->mooe }}</td>
                        <td>{{ $procurement->co }}</td>
                        <td>{{ $procurement->remarks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
