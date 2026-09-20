@extends('modstart::layout.frame')

@section('pageFavIco'){{modstart_config_asset_url('siteFavIco')}}@endsection
@section('pageTitle')@yield('pageTitleMain','') | {{modstart_config('siteName')}}@endsection
@section('pageKeywords'){{modstart_config('siteKeywords')}}@endsection
@section('pageDescription'){{modstart_config('siteDescription')}}@endsection

@section('headAppend')
    @parent
    @if($c=modstart_config('sitePrimaryColor'))
        <style type="text/css">{!! \ModStart\Core\Util\ColorUtil::primaryColorCss($c) !!}</style>
    @endif
    {!! \ModStart\Core\Hook\ModStartHook::fireInView('PageHeadAppend',$this); !!}
@endsection

@section('bodyAppend')
    @parent
    {!! \ModStart\Core\Hook\ModStartHook::fireInView('PageBodyAppend',$this); !!}
@endsection

@section('body')

    @include('theme.default.pc.share.header')

    @section('bodyContent')
    @show

    @include('theme.default.pc.share.footer')

@endsection
