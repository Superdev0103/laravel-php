<div class="core-layout__sidebar-mobile-navigation">
    <div class="core-layout__sidebar-mobile-navigation-toolbar">
        <p>Menu</p>
        <button href="#" class="btn btn-transparent core__left-sidebar-toggle"><i class="fa fa-times"></i></button>
    </div>

    @include('nodes.backend::partials.topbar.user-menu', [
        'renderForMobile' => true
    ])
    @include('nodes.backend::partials.topbar.admin-menu', [
        'renderForMobile' => true
    ])
    @include('nodes.backend::partials.topbar.shortcuts', [
        'renderForMobile' => true
    ])
</div>

<div class="sidebar sidebar__navigation">
    @include('nodes.backend::partials.sidebar.top-actions')

    <div class="list-group list-group-inverse">
        @include('nodes.backend::partials.sidebar.navigation')
    </div>
    @include('nodes.backend::partials.sidebar.bottom-actions')
</div>