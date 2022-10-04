@php
$target = $attributes['target'] ?? 'self';
$href = $attributes['href'] ?? null;

$hover = $attributes['group'] ? ' grouplink' : ' link';

$class = $attributes['class'];
$class .= $hover;

@endphp


<a {{ $attributes->merge(['href' => $href, 'target' => $target, 'class' => $class]) }}>
    {{ $slot }}
</a>
