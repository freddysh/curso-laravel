@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>REPORT {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-secondary" href="{{ route('expense_reports.index')}}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-secondary" href="{{ route('expense_reports.confirm_send_email',$report->id)}}">Send email</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Created</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($report->expenses as $item)
                    <tr>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td><span class="text-success"><sup>S/.</sup>{{ $item->amount }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('expenses.create',$report->id) }}">Add</a>
    </div>
</div>
@endsection

