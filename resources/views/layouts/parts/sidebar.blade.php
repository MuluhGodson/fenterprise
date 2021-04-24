<div class="bg-red-900 text-gray-200 h-screen divide-y-2">
    <a href="">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Products</p>
        </div>
    </a>

    <a href="{{ route('category.index') }}">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Categories</p>
        </div>
    </a>
    

    <a href="{{ route('warehouse.index') }}">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Branches</p>
        </div>
    </a>
   
    <a href="">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Locations</p>
        </div>
    </a>
    
    <a href="{{ route('staff.index')}}">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Employees</p>
        </div>
    </a>
    
    <a href="">
        <div class="py-5 hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 text-gray-200">Sales</p>
        </div>
    </a>
</div>