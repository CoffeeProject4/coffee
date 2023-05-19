@extends('admin.layout_admin')

@section('content')
    <h1>Contact Data</h1>
    <table>
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
            @endforeach
        </tbody>
    </table>
@endsection
