<div class="row">
    <div class="col-12">
        <h1>Expense Report {{ $report->id }}:{{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table>
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
                        <td>{{ $item->amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
