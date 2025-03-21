@for($c = 1;$c < $attributes->get('sps', 0);$c++)&nbsp;@endfor
<i 
    class="ph ph-{{ $attributes->get('i', 'question') }} {{ $attributes->get('class') }}"
    style="{{$style ?? ''}}"
></i>
@for($c = 1;$c < $attributes->get('spe', 1);$c++)&nbsp;@endfor
