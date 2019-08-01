@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>NEW EXPENSE</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-secondary" href="{{ route('expense_reports.show',$report->id)}}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif
        <form action="{{ route('expenses.store',$report->id) }}" method="post">
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="amount" value="{{ old('amount') }}">
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

