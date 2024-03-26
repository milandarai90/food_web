<aside class="layout-side-nav-bar-wrapper">
    <div class="layout-side-nav-bar">
        <div class="side-nav-bar-wrapper">
            <div class="side-nav-bar-section">
                <div class="logo-section">
                    <div class="logo d-flex justify-content-center p-5">
                        <a href="/dashboard">
                            <div class="logo-food">
                                FOOD
                            </div>
                            <div class="logo-web">
                                WEB
                            </div>
                        </a>
                    </div>
                </div>
                <div class="nav-section pt-3 ">
                    <ul>
                        @if($user->role === 'Super-Admin')
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">User Management</span>
                            <div class="user-section">
                                {{-- @hasrole('Super-Admin') --}}
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('admin.create') }}">Create a User</a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('admin.index') }}">View Users</a>
                                    </li>
                                </ul>
                                {{-- @endhasrole --}}
                            </div>
                        </li>
                        @endif
                        {{-- @if($user->role === 'Super-Admin')
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Roles and Permission</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('roles.create') }}">Create a Role</a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('roles.index') }}">View Roles</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif --}}
                        @if($user->role == 'Admin')
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Orders</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        {{-- <a href="/order-restuarant"><span>Orders Received</span></a> --}}
                                        <a href="{{ route('order.restaurant') }}"><span>Orders Received</span></a>
                                    </li>
                            </div>
                        </li>
                        @endif

                        @if($user->role == 'Super-Admin')
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Restaurant</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('restaurant.create') }}">Add Restaurant</a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('restaurant.index') }}">View Restaurant</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Food</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('food.create') }}"><span>Add Food Item</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('food.index') }}"><span>View Food Items</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Category</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('category.create') }}"><span>Add Food Category</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('category.index') }}"><span>View Food Category</span></a>
                                    </li>
                                    {{-- <li class="small">
                                        <a href="{{ route('subcategory.create') }}"><span>Add Sub Category</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('subcategory.index') }}"><span>View Sub Category</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        {{-- <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Food Type</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('foodtype.create') }}"><span>Add Food Type</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('foodtype.index') }}">View Food Type</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        {{-- <li class="menu-item {{ request()->is('stock*') ? 'active' : '' }}
                            {{ request()->is('stock*') ? 'active' : '' }}
                            ">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box"></i>
                                <div data-i18n="Product Stock">Product Stock</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item {{ request()->is('stock/create') ? 'active' : '' }}">
                                    <a href="{{ route('stock.create') }}" class="menu-link">
                                        <div data-i18n="Add Stock">Add Stock</div>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->is('bulk-add') ? 'active' : '' }}">
                                    <a href="{{ route('bulk-add') }}" class="menu-link">
                                        <div data-i18n="Add Bulk Stock">Add Bulk Stock</div>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->is('stock') ? 'active' : '' }}">
                                    <a href="{{ route('stock.index') }}" class="menu-link">
                                        <div data-i18n="View">View</div>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Image</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('images.create') }}"><span>Add Image</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('categoryimages.create') }}"><span>Category Images</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @if($user->role == 'Admin')
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Price</span>
                            <div class="user-section">
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('price.create') }}"><span>Set Food Price</span></a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('price.index') }}"><span>View Food Price</span></a>
                                    </li>
                                    {{-- <li class="small">
                                        <a href="{{ route('subcategory.index') }}"><span>View Sub Category</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* .layout-side-nav-bar{
            height: 100%;
            width: 18%;
            position: sticky;
            left: 0;
            top: 0;
            background-color: #1e1817;
        } */



        .layout-side-nav-bar-wrapper {
            height: 100%;
            width: 18%;
            position: sticky;
            left: 0;
            top: 0;
            background-color: #1e1817;
            overflow-y: scroll;
        }

        .logo-web {
            color: #000;
            background-color: #ffa31a;
            padding: 0.5rem 0.3rem;

        }

        .logo a {
            display: flex;
            align-items: center;
        }

        .logo-food {
            color: #fff;
            background-color: #292929;
            padding: 0.5rem 0.3rem;
        }

        a span:hover{
            color: #ffa31a;
        }
    </style>
</aside>
