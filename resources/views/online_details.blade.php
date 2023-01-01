@extends('master')
@section('title')
    Details
@endsection
@section('content')
    Patient : {{ $appointment_data->patient_name }}
@endsection
