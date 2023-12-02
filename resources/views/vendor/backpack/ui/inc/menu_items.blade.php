{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<x-backpack::menu-dropdown title="User related" icon="la la-group">
    <x-backpack::menu-dropdown-item title="All users" icon="la la-question" :link="backpack_url('pet')" />
    <x-backpack::menu-dropdown-item title="Appointments" icon="la la-group"  />
</x-backpack::menu-dropdown>


<x-backpack::menu-dropdown title="Pets Related" icon="la la-group">
    <x-backpack::menu-dropdown-item title="All Pets" icon="la la-question" :link="backpack_url('pet')" />
    <x-backpack::menu-dropdown-item title="Breeds" icon="la la-group"  />
    <x-backpack::menu-dropdown-item title="Stories" icon="la la-group"  />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Audits" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Revision History" icon="la la-question" :link="backpack_url('revision')" />
    <x-backpack::menu-dropdown-item title="Extra Data" icon="la la-group"  />
</x-backpack::menu-dropdown>

<x-backpack::menu-item title="Messaging" icon="la la-question"  />