@extends('layout.main')

@section('content')
    <p>{{ $userlist }}</p>
    <h1>ini halaman poin</h1>
    <h3>Halo, <br>
        poinmu </h3>
    @foreach ($userlist as $data)
        <li>
            {{ $data->name }}|{{ $data->roles_id }}
        </li>
    @endforeach
@endsection
