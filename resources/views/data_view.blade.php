@extends('layouts.master')
@section('content')
    <div class="common-font-size-lg text-center common-font-weight-bold common-margin-bottom-20">Results</div>
    <div>
        @if($type == 'location')
            <div class="row header-row text-center common-font-weight-bold common-background-color-light-grey ">
                <div class="col-md-1 common-border-all common-border-color-black common-padding-10">ID</div>
                <div class="col-md-3 common-border-all common-border-color-black common-padding-10">LOCATION</div>
                <div class="col-md-3 common-border-all common-border-color-black common-padding-10">COUNTRY CODE</div>
                <div class="col-md-1 common-border-all common-border-color-black common-padding-10">EXTERNAL INDEX</div>
                <div class="col-md-2 common-border-all common-border-color-black common-padding-10">EDIT</div>
                <div class="col-md-2 common-border-all common-border-color-black common-padding-10">DELETE</div>
            </div>
            @if($results)
                @if($results==null)
                    <div class="text-center common-padding-10">no locations found</div>
                @else
                    @foreach($results as $item)
                        <div class="row body-row background-color-body-row text-center">
                            <div class="col-md-1 common-border-color-gray common-border-all common-padding-10">{{$item['id']}}</div>
                            <div class="col-md-3 common-border-color-gray common-border-all common-padding-10">{{$item['location_name']}}</div>
                            <div class="col-md-3 common-border-color-gray common-border-all common-padding-10">{{$item['country']}}</div>
                            <div class="col-md-1 common-border-color-gray common-border-all common-padding-10">{{$item['external_code']}}</div>
                            <div class="col-md-2 common-border-color-gray common-border-all common-padding-10 common-font-color-light-blue"><a href="{{url('/locationUpdate?id='.$item['id'])}}">edit</a></div>
                            <div class="col-md-2 common-border-color-gray common-border-all common-padding-10 common-font-color-red"><a href="{{url('/locationDelete?id='.$item['id'])}}">delete</a></div>
                        </div>
                    @endforeach
                @endif
            @endif
        @elseif($type=='results')
            <div class="row header-row text-center common-font-weight-bold common-background-color-light-grey ">
                <div class="col-md-2 common-border-all common-border-color-black common-padding-10">ID</div>
                <div class="col-md-3 common-border-all common-border-color-black common-padding-10">LOCATION INDEX</div>
                <div class="col-md-3 common-border-all common-border-color-black common-padding-10">TIMESTAMP</div>
                <div class="col-md-2 common-border-all common-border-color-black common-padding-10">RATING</div>
                <div class="col-md-2 common-border-all common-border-color-black common-padding-10">DELETE</div>
            </div>
            @if($results)
                @if($results==null)
                    <div class="text-center common-padding-10">no ratings found</div>
                @else
                    @foreach($results as $item)
                        <div class="row body-row background-color-body-row text-center">
                            <div class="col-md-2 common-border-color-gray common-border-all common-padding-10">{{$item['id']}}</div>
                            <div class="col-md-3 common-border-color-gray common-border-all common-padding-10">{{$item['location_index']}}</div>
                            <div class="col-md-3 common-border-color-gray common-border-all common-padding-10">{{$item['timestamp']}}</div>
                            <div class="col-md-2 common-border-color-gray common-border-all common-padding-10">{{$item['rating']}}</div>
                            <div class="col-md-2 common-border-color-gray common-border-all common-padding-10 common-font-color-red"><a href="{{url('/pollDelete?id='.$item['id'])}}">delete</a></div>
                        </div>
                    @endforeach
                @endif
            @endif
        @endif
        <div class="row common-margin-top-20 common-font-size-md">
            <div class="col-md-2">&nbsp;</div>
            @if($type=='location')
                <div class="col-md-4 text-center common-font-color-green"><a href="{{url('/create')}}">new location</a></div>
            @else
                <div class="col-md-2">&nbsp;</div>
            @endif
            <div class="col-md-4 text-center"><a href="{{url("/dash")}}">go back</a></div>
        </div>
    </div>
@endsection