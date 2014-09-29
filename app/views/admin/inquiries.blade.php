@extends('admin.master')
@section('header')<h2>Inquiries</h2>@stop
@section('content')

<table class="table-striped table">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Product</th>
        <th>Date</th>
    </tr>
@foreach($inquiries as $inquiry)
<tr>
    <td>{{ $inquiry->id }}</td>
    <td>{{ $inquiry->email }}</td>
    <td>{{ $inquiry->subject }}</td>
    <td>{{ $inquiry->message }}</td>
    <td>{{ $inquiry->product }}</td>
    <td>{{ $inquiry->created_at }}</td>
</tr>
@endforeach

</table>
{{ $inquiries->links(); }}
@stop