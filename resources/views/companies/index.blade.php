@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Companies</h2>

    @role('admin')
        <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Add Company</a>
    @endrole

    <table class="table table-bordered">
        <tr>
            <th>Name</th><th>Email</th><th>Address</th><th>Actions</th>
        </tr>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->address }}</td>
                <td>
                    <a href="{{ route('companies.show',$company->id) }}" class="btn btn-info btn-sm">View</a>

                    @role('admin')
                        <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('companies.destroy',$company->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    @endrole
                </td>
            </tr>
        @endforeach
    </table>

    {{ $companies->links() }}
</div>
@endsection
