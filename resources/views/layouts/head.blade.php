<title>Pledodel
    {{--@if(!empty($meta->title)){{ $meta->title }}{{ Config::get('meta.title.ending') }}@else{{ Config::get('meta.title.default') }}@endif<--}}
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

{{--<meta charset="utf-8">--}}
{{--<meta name="copyright" content="{{ Config::get('meta.copyright') }}">--}}
{{--<meta name="description" content="{{ $meta->description or Config::get('meta.description') }}">--}}
{{--<meta name="keywords" content="@if(!empty($meta->keywords)){{ implode(', ', $meta->keywords) }}, {{Config::get('meta.keywords') }}@else{{Config::get('meta.keywords') }}@endif">--}}
{{--<meta name="robots" content="INDEX, FOLLOW">--}}

{{--<!-- FB Meta -->--}}
{{--<meta property="og:title" content="@if(!empty($meta->title)) {{ $meta->title }}{{ Config::get('meta.title.ending') }}@else{{ Config::get('meta.title.default') }}@endif">--}}
{{--<meta property="og:type" content="{{ $meta->og_type or Config::get('meta.og.type') }}">--}}
{{--<meta property="og:description" content="{{ $meta->description or Config::get('meta.description') }}">--}}
{{--<meta property="og:image" content="@if(isset($meta) && property_exists($meta, 'image')){{ cdn($meta->image) }}@else{{ urls(Config::get('meta.image')) }}@endif">--}}
{{--<meta property="og:url" content="{{ Config::get('app.url') }}/{{ Request::path() }}">--}}

{{--<!-- Twitter Meta -->--}}
{{--<meta name=”twitter:card” content=”summary”>--}}
{{--<meta name=”twitter:url” content=”{{ Request::url() }}”>--}}
{{--<meta name=”twitter:title” content=”@if(!empty($meta->title)){{ $meta->title }}{{ Config::get('meta.title.ending') }}@else{{ Config::get('meta.title.default') }}@endif”>--}}
{{--<meta name=”twitter:description” content=”{{ $meta->description or Config::get('meta.description') }}”>--}}
{{--<meta name=”twitter:image” content=”{{ Config::get('app.url') }}{{ $meta->image or Config::get('meta.image') }}”>--}}

{{--<!-- Other -->--}}
{{--<meta name="format-detection" content="telephone=no" /> <!-- Stop Random Phone Links on iPhone-->--}}