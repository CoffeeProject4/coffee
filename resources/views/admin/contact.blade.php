@extends('admin.layout_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Contact Data</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->number }}</td>
                        <td>{{ $contact->review }}</td>
                    </tr>
                    <tr class="spacer-row"></tr> <!-- Add this extra row for spacing -->
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .container {
        padding-top: 20px;
    }

    th, td {
        text-align: center;
        vertical-align: middle;
    }

    .spacer-row {
        height: 20px;
        background-color: #f5f5f5;
    }
</style>
@endsection
