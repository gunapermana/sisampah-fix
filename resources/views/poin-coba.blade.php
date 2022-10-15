@extends('layout.main')

@section('content')
    <p>{{ $userlist }}</p>
    <h1>ini halaman poin</h1>
    <h3>Halo, <br>
        poinmu </h3>
    {{-- <ul>
        @foreach ($userlist as $data)
            <li>
                {{ $data->name }} {{ $data->role->role }}
            </li>
        @endforeach
    </ul> --}}
@endsection
