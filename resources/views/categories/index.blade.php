<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
@foreach ($categories as $category)

<div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg bg-gray-400">
    <a href="{{ route('categories.show',$category->id) }}">
    <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
    <div class="px-6 py-4 ">
        <h4 class="mb-3 text-xl font-semibold tracking-tight  text-white uppercase">{{ $category->name }}</h4>

    </div>
</a>
</div>

@endforeach
        </div>
    </div>
</x-guest-layout>
