@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($profiles as $profile)
    <div class="row panel">
        <div class="col-md-4 bg_blur ">
            <img src="/image/bg-{{$profile->id}}.jpg" width="100%" height="100%">
            <a href="#" class="follow_btn hidden-xs">Follow</a>
        </div>
        <div class="col-md-8  col-xs-12">
            <img src="/image/ava-{{$profile->id}}.jpg" class="img-thumbnail picture hidden-xs" />
            <img src="/image/ava-{{$profile->id}}.jpg" class="img-thumbnail visible-xs picture_mob" />
            <div class="header">
                <h1>{{ $profile->family_name.$profile->given_name}} さん</h1>
                <h4>{{ $profile->prefecture }}・
                    {{ $profile->age }}才・
                    {{ $profile->sex }}・
                    {{ $profile->attribute }}・
                    オススメ度:{{ $profile->recommendation_ranking }}
                </h4>
                <span>
                    {{ $profile->best_technique }}
                </span>
            </div>

            <div class="row nav">
                <div class="col-md-4"></div>
                <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
