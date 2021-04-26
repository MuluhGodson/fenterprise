<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 py-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div>
                    <a href="{{ route('category.create') }}" class="p-1 text-yellow-300 font-bold bg-red-900 rounded">Add Category</a>
                </div>
                <hr class="my-4">

                <div class="my-5 py-5 grid md:grid-cols-4 grid-cols-1 place-content-center gap-5">
                    @forelse ($categories as $category)
                        <div class="col shadow-lg rounded bg-yellow-400">
                            <img src="{{Storage::url($category->image)}}" class="w-full" alt="{{$category->name}}">
                            <div class="p-3">
                                <h1 class="text-center text-red-900 font-semibold">
                                    {{ $category->name }}
                                </h1>
                            </div>
                            <div>
                                <div class="flex justify-between content-end px-2 py-3">
                                    <div class="self-end"><a href="{{ route('category.edit', $category)}}" class="bg-red-900 text-yellow-300 p-1 rounded font-semibold"> <small>Edit</small></a></div>
                                    <div class="self-end">
                                        <form method="POST" action="{{route('category.destroy', $category->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="border bg-transparent cursor-pointer border-red-900 text-red-900 rounded p-1 font-semibold">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center font-semibold">No categories found. Create a New Category to get started.</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-app-layout>