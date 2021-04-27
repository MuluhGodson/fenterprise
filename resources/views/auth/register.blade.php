{{--<x-guest-layout>--}}
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        {{--<form method="POST" action="{{ route('register') }}">
            @csrf--}}

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="tel" value="{{ __('Telephone') }}" />
                <x-jet-input wire:model="tel" id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-jet-input wire:model="dob" id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="division_of_origin" value="{{ __('Place of Birth') }}" />
                @livewire('admin.utils.location-component', ['lt' => !($editUser) ? null : $subdivision])
            </div>

            <div class="mt-4">
                <x-jet-label for="cni" value="{{ __('ID Card Number') }}" />
                <x-jet-input wire:model="cni" id="address" class="block mt-1 w-full" type="text" name="cni" :value="old('cni')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input wire:model="address" id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="role" value={{_('Role')}} />
                <select wire:model="role" name="role" id="role" class="block mt-1 w-full py-2 rounded">
                    <option value="">Select a Role</option>
                    @foreach($roles as $r)
                        <option value="{{$r->name}}">{{$r->name}}</option>  
                    @endforeach
                </select>
            </div>

            {{--<div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>--}}

            {{--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif--}}

            <div class="flex items-center justify-end mt-4">
                {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>--}}

                <x-jet-confirms-password wire:then="{{ !($editUser) ? 'register()' : 'update('.$uid.')' }}">
                    <x-slot name="content">
                        <p>This is a high priority function. Please confirm your password to continue.</p>
                    </x-slot>
                    <button class="p-1 text-yellow-300 font-bold bg-red-900 rounded" wire:loding.attr="disabled" class="ml-4">
                        {{ !($editUser) ? __('Send Invitation') : __('Update') }}
                    </button>
                </x-jet-confirms-password>
            </div>
        {{--</form>--}}
    </x-jet-authentication-card>
{{--</x-guest-layout>--}}
