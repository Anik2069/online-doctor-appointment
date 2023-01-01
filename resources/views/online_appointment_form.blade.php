@extends('master')
@section('title')
    Online
@endsection
@section('content')
    @if ($message = Session::get('success'))
        {{ $message }}
    @endif
    @if (!isset($appointment_data))
        <form action="/online-appointment" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ @$appoint_info->id }}">
            <input type="text" name="patient_name" value="{{ @$appoint_info->patient_name }}" placeholder="Paitnet Name">
            <input type="text" name="doc_name" value="{{ @$appoint_info->doctor_name }}" placeholder="Doctor Name">
            <button type="submit">Submit</button>
        </form>
    @endif
    @if (isset($appointment_data))
        @foreach ($appointment_data as $app)
            <a href="{{ route('show-details', $app->id) }}">
                <p>P:{{ $app->patient_name }}</p>
                <p>D:{{ $app->doctor_name }}</p>
            </a>
            <a href="{{ route('edit-appointment', $app->id) }}">Edit</a>
        @endforeach
    @endif
@endsection
