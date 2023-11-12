<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm rounded-circle">
            <img class="avatar avatar-sm rounded-circle bg-transparent" src="{{ backpack_avatar_url(backpack_auth()->user()) }}"
                alt="{{ auth()->user()->name }}" onerror="this.style.display='none'"
                style="margin: 0;position: absolute;left: 0;z-index: 1;">
            <span class="avatar avatar-sm rounded-circle backpack-avatar-menu-container text-center">
                {{ auth()->user()->getAttribute('name') ? mb_substr(auth()->user()->name, 0, 1, 'UTF-8') : 'A' }}
            </span>
        </span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ auth()->user()->name }}</div>
            <div class="mt-1 small text-muted">{{ trans('backpack::crud.admin') }}</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        @if(config('backpack.base.setup_my_account_routes'))
            <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="la la-user me-2"></i>{{ trans('backpack::base.my_account') }}</a>
            <div class="dropdown-divider"></div>
        @endif
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item"><i class="la la-lock me-2"></i>{{ trans('backpack::base.logout') }}</a>
        </form>
    </div>
</div>
