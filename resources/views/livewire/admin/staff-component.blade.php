<div>
    <div>
        <button wire:click="create()" class="p-1 text-yellow-300 font-bold bg-red-900 rounded">Add Employee</button>
    </div>
    <hr class="my-4">

    <div class="my-5 py-5">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Role</th>
                    <th>Invitation Status</th>
                    <th>Invited By</th>
                </tr>
            </thead>
            <tfoot>
                <tbody class="space-y-5">
                    @foreach($users as $user)
                        <tr class="mt-6 divide-y py-6 text-center">
                            <td>
                                <img class="h-10 w-10 mx-2 rounded-full object-cover" src="{{$user->profile_photo_url}}" alt="{{$user->name}}">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>
                                {{$user->email}}
                                @if($user->email_verified_at == null)
                                    <span class="font-bold text-red-400 text-sm">[not verified]</span>
                                @else
                                    <span class="font-bold text-green-400 text-sm">[verified]</span>
                                @endif
                            </td>
                            <td>{{$user->tel}}</td>
                            {{--
                                <td>{{$user->getRoleNames()}}</td>
                                <td class="font-bold text-sm">
                                    @if($user->password == null)
                                        <span class="text-red-400">PENDING</span>
                                    @else
                                        <span class="text-green-400">ACCEPTED</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $userr = DB::table('users')->find($user->created_by);
                                        echo "<span>$userr->name</span>"
                                    @endphp
                                </td>
                                <td><button class="rounded bg-red-400 my-3 py-2 px-3">Delete</button></td>
                            --}}
                        </tr>
                    @endforeach
                </tbody>
            </tfoot>
        </table>
    </div>

    {{-- Create User --}}
        <x-jet-dialog-modal wire:model="createUser">
            <x-slot name="title">
                Invite Employee
            </x-slot>

            <x-slot name="content">
                @include('auth.register')
            </x-slot>
            
            <x-slot name="footer">
            </x-slot>
        </x-jet-dialog-modal>

</div>
