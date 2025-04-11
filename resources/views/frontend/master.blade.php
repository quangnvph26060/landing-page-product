<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $config->seo_title ?? $config->title }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    @include('frontend.layouts.partials.style')

    {!! $config->script_head !!}
</head>

<body>
    <div class="container">
        <header class="bg-light">

            @include('frontend.layouts.includes.header-top')

            @include('frontend.layouts.includes.header-body')

        </header>

        <div id="SECTION1">
            @include('frontend.layouts.includes.section-1')
        </div>

        <div id="SECTION2">
            @include('frontend.layouts.includes.section-2')
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION3" class="px-2">
            @include('frontend.layouts.includes.section-3')

            <p class="text-muted">Còn hơn 52+ đánh giá khác…</p>
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION4">
            @include('frontend.layouts.includes.section-4')
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION5" class="px-2">
            {!! $s4->description !!}
        </div>

        <div id="SECTION6" class="text-center mt-4 bg-light px-2 py-3">
            @include('frontend.layouts.includes.section-5')
        </div>

        <div class="fixed-bottom-bar">
            @include('frontend.layouts.includes.fixed-bottom-bar')
        </div>

        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
            @include('frontend.layouts.includes.cart-modal')
        </div>
    </div>


    @include('frontend.layouts.partials.script')

</body>

</html>
