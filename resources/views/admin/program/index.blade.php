@extends('layouts.admin')
@section('content')


    <div class="card">
        <div class="card-header">
            Programs
        </div>

        <div class="card-body">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Program Name</th>
                    <th>Status</th>
                    <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@stop


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.program') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'added_by', name: 'added_by'},
                    {data: 'program_name', name: 'program_name'},
                    {data: 'publish', name: 'publish', orderable: false, searchable: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });
    </script>

