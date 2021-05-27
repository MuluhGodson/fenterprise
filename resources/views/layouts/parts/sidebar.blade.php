<div class="bg-red-900 text-gray-200 h-screen divide-y-2">
     <a href="{{route('inventory.index')}}">
        <div class="py-5 flex content-center items-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Inventory</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-shopping-bag text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>

    <a href="{{ route('product.index') }}">
        <div class="py-5 flex content-center items-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Products</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-paint-roller text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>

    <a href="{{ route('category.index') }}">
        <div class="py-5 flex content-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Categories</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-folder-open text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>

    <a href="{{ route('warehouse.index') }}">
        <div class="py-5 flex content-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Branches</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-store text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>
    
   
    <a href="{{ route('location.index') }}">
        <div class="py-5 flex content-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Locations</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-map-marker-alt text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>
    
    <a href="{{ route('staff.index')}}">
        <div class="py-5 flex content-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Employees</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-users text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>
    
    <a href="">
        <div class="py-5 flex content-center justify-between hover:bg-yellow-400 px-3 rounded cursor-pointer">
            <p class="px-5 font-bold text-gray-200">Sales</p>
            <span class="fa-stack">
                <i class="fas fa-circle text-yellow-800 fa-stack-2x"></i>
                <i class="fas fa-chart-line text-yellow-400 fa-stack-1x"></i>
            </span>
        </div>
    </a>
</div>