@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
{{--  trigger  --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

{{--  drodown links  --}}
    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none;">
        {{ $slot }}
    </div>
</div>
