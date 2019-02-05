@extends('layouts.app')

@section('content')

    <div id="VueApp" class="h-full w-full flex justify-center items-center">        
        <example-component></example-component>
    </div>

@endsection

@section('scripts')
    <script src="{{ mix('js/VueApp.js') }}"></script>
@endsection
