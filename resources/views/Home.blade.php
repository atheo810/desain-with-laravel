<x-layout>

    @foreach ($posts as $post)
        <x-home-content :post="$post" />
    @endforeach

</x-layout>
