@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Send report</h1>
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
        <form action="{{ route('expense_reports.send_email',$report->id) }}" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') }}">
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Send mail</button>
        </form>
    </div>
</div>
@endsection

