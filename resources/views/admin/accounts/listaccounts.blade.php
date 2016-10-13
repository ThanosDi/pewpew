@extends('layouts.masteradmin')
@section('pageTitle', $admintitle)
@section('contentadmin')
<div class="col-md-10">
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>E-mail</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($users as $user)
        	 <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                
            </tr>
        @endforeach
           
           
        </tbody>
    </table>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection