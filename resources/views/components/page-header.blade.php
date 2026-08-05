@props([
    'breadcrumb' => null,
    'title',
    'description' => null,
])

<div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">
    <div>
        @if ($breadcrumb)
            <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
                {{ $breadcrumb }}
            </p>
        @endif

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            {{ $title }}
        </h1>

        @if ($description)
            <p class="mt-1 text-sm text-slate-500">
                {{ $description }}
            </p>
        @endif
    </div>

    @isset($action)
        <div>
            {{ $action }}
        </div>
    @endisset
</div>