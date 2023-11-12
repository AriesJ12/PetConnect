@auth
    @if (auth()->user()->role === 'admin')
        <div class="flex gap-2 fixed bottom-[60px] right-[60px]">
            <x-admin-user-switch href="{{ route('backpack.dashboard') }}" :active="Str::contains(request()->path(), 'admin')">
                Admin
            </x-admin-user-switch>
            <x-admin-user-switch href="{{ route('dashboard') }}" :active="!Str::contains(request()->path(), 'admin')">
                User
            </x-admin-user-switch>
        </div>
    @endif
@endauth