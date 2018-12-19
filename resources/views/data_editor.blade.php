@extends('layouts.master')
@section('content')
    @if(!isset($results[0]['location_name']))
        <?php
        $results = ['0'=>['location_name'=>'','country'=>'','external_code'=>'']];
        ?>
    @endif
    <div class="common-margin-top-50">
        <div class="common-font-size-lg common-font-weight-bold text-center common-margin-bottom-40">
            @if($results[0]['location_name']!='')
                Update
            @else
                Create
            @endif
        </div>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8 background-color-light-grey common-padding-20">
                <div class="row">
                    <form action="{{url('/newLocation')}}" method="post" class="row ">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <label for="name">Location Name<br></label>
                            <input id="name" type="text" name="location_name" style="max-width: 100%" value="{{$results[0]['location_name']}}">
                        </div>
                        <div class="col-md-3">
                            <label for="country">Country code</label>
                            <input id="country" type="text" name="country" style="max-width: 100%" value="{{$results[0]['country']}}">
                        </div>
                        <div class="col-md-3">
                            <label for="code">External Code</label>
                            <input id="code" type="text" name="external_code" style="max-width: 100%" value="{{$results[0]['external_code']}}">
                        </div>
                        <div class="col-md-12 common-margin-top-20">
                            <div class="text-center">
                                <button type="submit">
                                @if($results[0]['location_name']!='')
                                    Update
                                @else
                                    Create
                                @endif
                                </button>

                                <a href="{{url()->previous()}}" class="common-padding-left-30">back</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection