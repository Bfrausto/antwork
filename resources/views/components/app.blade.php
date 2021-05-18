<x-master>

<section class="px-8">
    <main class="container mx-auto">
        <div class="lg:flex lg:justify-between">
            @if (auth()->check())
                <div class="lg:w-1/6 pl-12">
                    @include('_side_bar_links')
                </div>
            @endif
            <div class="lg:flex-1 lg:mx-10 " style="max-width:800px" >
                {{$slot}}
            </div>
            @if (auth()->check())
            <div class="lg:w-1/6 bg-yellow-100 rounded-lg p-4" style="height:50%">
                @include('_friends_list')
            </div>
            @endif

        </div>

    </main>
</section>

</x-master>
