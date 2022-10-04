@props(['item' => $item])

<a href="{{ $item->route_path }}" target="{{ $item->target }}"
    class="block px-2 xxl:px-4 xl:px-3 mx-auto cursor-pointer text-center py-3 font-sans uppercase font-bold text-sm text-gray-700 text-sm  @if ($item->active) text-white disabled cursor-default bg-dark  @else hover:text-primary-500 hover:bg-primary-50 @endif">


    <span class="sr-only">{{ $item->name }}</span>
    @if ($item['icon'])
        <i class="{!! $item['data']['icon'] !!}"></i>
    @endif
    @if (!$item['icon_only'])
        {{ $item->name }}
    @endif
</a>
