<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Hash;
use Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Laravel\Jetstream\Contracts\DeletesUsers;
use Laravel\Jetstream\ConfirmsPasswords;

class StaffComponent extends Component implements DeletesUsers
{
    use ConfirmsPasswords;

    public $users, $roles, $name, $email, $role, $created_by, $tel, $user_id;
    public $createUser = false;
    public $deleteUser = false;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.staff-component');
    }

    public function create()
    {
        $this->roles = Role::all();
        $this->createUser = true;
    }

    public function register()
    {
        $this->ensurePasswordIsConfirmed();
        $this->created_by = Auth()->User()->id;
        $data = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'tel' => 'required',
        ]);

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->tel = $data['tel'];
        $user->created_by = $this->created_by;
        $user->save();

        //Assign Role to User
        $user->assignRole($data['role']);

        //Send invitation to USer
        $expiresAt = Carbon::now()->addHours(5);
        $user->sendWelcomeNotification($expiresAt);

        $this->createUser = false;
    }

    public function delete($id)
    {
        $this->ensurePasswordIsConfirmed();
        $user = User::find($id);
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
