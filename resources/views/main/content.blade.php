<main id='main-content' class='creative-layout' style='margin-bottom: 200px;'>
    <!-- margin value is the height of your footer -->
    @include('main.section.hero')
    @include('main.section.whatwedo')
    @include('main.section.portfolio')
    @include('main.section.counter')
    @if('s' === 's')
        @include('main.section.slider')
    @endif
    @include('main.section.reviews')
