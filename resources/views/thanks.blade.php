@extends('layouts.master')
@section('content')
    <div>
        <div style="margin-top: 25vh">
            <div class="row common-margin-10 common-font-size-xl">
                <div class="common-text-centered col-md-12 common-font-weight-bold common-font-size-xl ">
                    Thank you for your rating!
                </div>
            </div>
        </div>
    </div>
@endsection
@php(header("refresh:5;/"))
