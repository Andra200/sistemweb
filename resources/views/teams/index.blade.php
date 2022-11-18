@extends('layout.default_okr')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tim</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data['teams'] as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

