@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>NEW REPORT</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a class="btn btn-secondary" href="{{ route('expense_reports.index')}}">Back</a>
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
        <form action="{{ route('expense_reports.store') }}" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ old('title') }}">
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

