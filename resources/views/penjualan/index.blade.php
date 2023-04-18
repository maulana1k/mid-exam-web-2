@extends('layouts.app') @section('content')

<div class="container mt-4">
    <div class="p-2">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td>Admin</td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myTable").DataTable();
    });
</script>
@endsection
