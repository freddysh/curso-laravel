@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>REPORTS</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('expense_reports.create')}}">Create new report</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>TITLE</th>
                        <th>OPTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($reports as $item)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td><a href="{{ route('expense_reports.show',$item->id) }}">{{ $item->title }}</a>
                            </td>
                            <td>
                                <a href="{{ route('expense_reports.edit',$item->id) }}">Edit</a>
                                <a class="text-danger" href="{{ route('expense_reports.confirm_delete',$item->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

