<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
      -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ isActive('home') }}">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('users') }}">
                <a class="nav-link" href="{{ route('admin.users.index') }}">
                    <i class="material-icons">people</i>
                    <p>{{ trans('app.users.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('categories') }}">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="material-icons">category</i>
                    <p>{{ trans('app.categories.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('skills') }}">
                <a class="nav-link" href="{{ route('admin.skills.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ trans('app.skills.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('tags') }}">
                <a class="nav-link" href="{{ route('admin.tags.index') }}">
                    <i class="material-icons">style</i>
                    <p>{{ trans('app.tags.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('pages') }}">
                <a class="nav-link" href="{{ route('admin.pages.index') }}">
                    <i class="material-icons">auto_stories</i>
                    <p>{{ trans('app.pages.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('videos') }}">
                <a class="nav-link" href="{{ route('admin.videos.index') }}">
                    <i class="material-icons">videocam</i>
                    <p>{{ trans('app.videos.index') }}</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
