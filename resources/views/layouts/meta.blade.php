
@php
    $path = '/' . ltrim(Request::path(), '/'); 
    $meta = config("meta.$path"); 
   
@endphp


      <title>{{ $meta['header'] ?? 'Default Title' }}</title>
      <meta name="description" content="{{ $meta['description'] ?? 'Default description' }}">
      <meta name="keywords" content="{{ $meta['keywords'] ?? 'default, keywords' }}">
@if (!empty($meta['canonical']))
<link rel="canonical" href="{{ $meta['canonical'] }}">
@endif