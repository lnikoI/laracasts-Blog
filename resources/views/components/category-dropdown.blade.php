{{--<div>--}}
{{--    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->--}}
{{--</div>--}}
<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full text-left flex lg:inline-flex">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach($categories as $category)
        {{--                    {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500' : '' }}--}}
        <x-dropdown-item href="?category={{ $category->slug }}"
                         :active="isset($currentCategory) && $currentCategory->is($category)"
        >{{ ucwords($category->name) }}
        </x-dropdown-item>

    @endforeach
</x-dropdown>
