<!-- resources/views/frontend/partials/page-title.blade.php -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url({{ asset('frontAssets/img/page-title-bg.jpg') }});">
    <div class="container position-relative">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
        <nav class="breadcrumbs">
            <ol>
                @foreach ($breadcrumbs as $breadcrumb)
                    <li class="{{ $loop->last ? 'current' : '' }}">
                        @if (isset($breadcrumb['url']) && !$loop->last)
                            <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                        @else
                            <span>{{ $breadcrumb['name'] }}</span>
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
