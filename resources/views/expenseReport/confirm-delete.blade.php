@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>NEW REPORT</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-secondary" href="{{ route('expense_reports.store')}}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="{{ route('expense_reports.destroy',$report->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>
</div>
@endsection

