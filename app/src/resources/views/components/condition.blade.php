@props(['condition' => false, 'message' => ''])
<x-icon i="{{$condition ? 'check' : 'x'}}" style="{{$condition ? 'color:green;' : 'color:red;'}}" />{{$message ?? ''}}