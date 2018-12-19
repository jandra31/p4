@extends('layouts.master')
@section('content')
    <div class="text-center common-font-size-lg" style="padding-top: 30vh;">Dashboard</div>
    <div class="row common-padding-top-30" >
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-4 common-min-height-20 text-center background-color-light-grey" style="padding-top: 10vh">
            <a href="{{url('dataview?r=2')}}">location management</a>
        </div>
        <div class="col-md-4 common-margin-left-10 common-min-height-20 text-center background-color-light-grey" style="padding-top: 10vh">
            <a href="{{url('dataview?r=3')}}">poll management</a>
        </div>
    </div>
@endsection
