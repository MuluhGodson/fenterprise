<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category/Edit') }}
        </h2>
    </x-slot>

    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg max-w-5xl p-5 mx-auto">
                <div class="px-10 py-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="my-4">
                            <h1 class="font-bold text-center text-uppercase">Update Category</h1>
                        </div>

                        <x-jet-validation-errors class="mb-4" />

                        <div class="my-4">
                            <x-jet-label for="name" value="Category Name" />
                            <x-jet-input name="name" value="{{$category->name}}" class="rounded w-full" type="text" />
                        </div>


                        <div class="my-4">
                            <x-jet-label for="description" value="Description" />               
                            <textarea name="description" class="rounded p-4 w-full border-gray-300 focus:border-yellow-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm">{{$category->description}}</textarea>
                        </div>


                        <div class="my-4">
                            <x-jet-label for="image" value="Category Cover Image" />
                            <x-jet-input name="image" class="rounded w-3/4" type="file" />


                            <div class="my-2 py-3">
                                <x-jet-label for="current_image" value="Current Image"/>
                                <a href="{{Storage::url($category->image)}}"><img src="{{Storage::url($category->image)}}" class="w-1/4" alt="{{$category->name}}"></a>
                            </div>
                        </div>

                        <div class="my-6">
                            <input type="submit" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded" value="Update Category">
                        </div>

                        @csrf
                        @method('PUT')
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>