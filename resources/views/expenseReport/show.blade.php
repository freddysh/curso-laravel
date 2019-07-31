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
    </div>
</div>
@endsection

