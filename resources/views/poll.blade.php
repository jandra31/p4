@extends('layouts.master')
@section('content')
    <div>
        <div style="margin-top: 25vh">
            <div class="row common-margin-10 common-margin-bottom-20">
                <div class="common-text-centered col-md-12 common-font-weight-bold common-font-size-xl ">
                    Please rate your experience
                </div>
            </div>
            <div>
                {{ csrf_field() }}
                <div class="row common-margin-top-50">
                    <div class="col-md-1">
                        &nbsp;
                    </div>
                    <div class=" col-md-2">
                        <a class="poll-button common-padding-40" href="{{url('/thanks?rating=1')}}">POOR</a>
                    </div>
                    <div class="col-md-2">
                        <a class="poll-button common-padding-40" href="{{url('/thanks?rating=2')}}">ADEQUATE</a>
                    </div>
                    <div class="col-md-2">
                        <a class="poll-button common-padding-40" href="{{url('/thanks?rating=3')}}">OK</a>
                    </div>
                    <div class="col-md-2">
                        <a class="poll-button common-padding-40" href="{{url('/thanks?rating=4')}}">GOOD</a>
                    </div>
                    <div class="col-md-2">
                        <a class="poll-button common-padding-40" href="{{url('/thanks?rating=5')}}">EXELENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection