<div>
    <div>
        <div class="m-2">
            <x-jet-label for="country" value="Select Country" />
            <select name="country" wire:model="country" class="w-full rounded" name="" id="">
                <option class="w-full" value="">Select a country</option>
                @forelse ($countries as $c)
                    <option class="w-full" value="{{$c->id}}">{{$c->name}}</option>
                @empty
                    <p>No Countries found.</p>
                @endforelse  
            </select>
        </div>

        @if($regions)
            <div class="m-2">
                <x-jet-label for="region" value="Select Region" />
                <select name="region" wire:model="region" class="w-full rounded" name="" id="">
                    <option class="w-full" value="">Select a Region</option>
                    @forelse($regions as $r)
                        <option class="w-full" value="{{$r->id}}">{{$r->name}}</option>
                    @empty
                        <p>No Regions found.</p>
                    @endforelse  
                </select>
            </div>
        @endif

        @if($divisions)
            <div class="m-2">
                <x-jet-label for="division" value="Select Division" />
                <select name="division" wire:model="division" class="w-full rounded" name="" id="">
                    <option class="w-full" value="">Select a Division</option>
                    @forelse($divisions as $d)
                        <option class="w-full" value="{{$d->id}}">{{$d->name}}</option>
                    @empty
                        <p>No Divisions found.</p>
                    @endforelse  
                </select>
            </div>
        @endif

        @if($subdivisions)
            <div class="m-2">
                <x-jet-label for="subdivision" value="Select SubDivision" />
                <select name="subdivision" wire:model="subdivision" class="w-full rounded" name="" id="">
                    <option class="w-full" value="">Select a SubDivision</option>
                    @forelse($subdivisions as $sd)
                        <option class="w-full" value="{{$sd->id}}">{{$sd->name}}</option>
                    @empty
                        <p>No SubDivisions found.</p>
                    @endforelse  
                </select>
            </div>
        @endif
    </div>
</div>
