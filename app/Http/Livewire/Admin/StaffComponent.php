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
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\Rule;
use App\Models\Country;
use App\Models\Region;
use App\Models\Division;
use App\Models\SubDivision;
use App\Models\Warehouse;

class StaffComponent extends Component implements DeletesUsers
{
    use ConfirmsPasswords;

    public $users, $roles, $name, $warehouses, $warehouse, $email, $role, $dob, $cni, $address, $created_by, $tel, $user_id, $uid, $country, $region, $division, $subdivision;
    public $createUser = false;
    public $editUser = false;
    public $deleteUser = false;
    protected $listeners = ['editStaff', 'countrySelected', 'regionSelected', 'divisionSelected', 'subdivisionSelected'];


    public function mount()
    {
        $this->warehouses = Warehouse::all();
    }

    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.staff-component');
    }

    public function countrySelected($id)
    {
        $this->country = Country::find($id);
    }

    public function regionSelected($id)
    {
        $this->region = Region::find($id);
    }

    public function divisionSelected($id)
    {
        $this->division = Division::find($id);
    }

    public function subdivisionSelected($id)
    {
        $this->subdivision = SubDivision::find($id);
    }

    public function create()
    {
        $this->roles = Role::all();
        $this->editUser = false;
        $this->createUser = true;
    }

    public function register()
    {
        $this->ensurePasswordIsConfirmed();
        $this->created_by = Auth()->User()->id;
        $data = $this->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'tel' => ['required'],
            'cni' => ['sometimes'],
            'address' => ['sometimes'],
            'dob' => ['sometimes'],
            'warehouse' => ['required']
        ]);

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->tel = $data['tel'];
        $user->dob = $data['dob'];
        $user->cni = $data['cni'];
        $user->address = $data['address'];
        $user->warehouse_id = $data['warehouse'];
        $user->created_by = $this->created_by;
        $user->save();

        //Assign Role to User
        $user->assignRole($data['role']);

        //Send invitation to USer
        $expiresAt = Carbon::now()->addHours(5);
        $user->sendWelcomeNotification($expiresAt);

        $this->createUser = false;
    }

    public function editStaff($id)
    {
        
        $this->editUser = true;
        $this->createUser = true;
        $u = User::find($id);
        $this->uid = $id;
        $this->name = $u->name;
        $this->email = $u->email;
        $this->tel = $u->tel;
        $this->warehouse = Warehouse::find($u->warehouse_id);
        $this->roles = Role::all();
        $ro = $u->getRoleNames();
        foreach ($ro as $r) {
            $this->role = $r;
        }
    }

    public function update($id)
    {
        $u = User::find($id);
        $this->ensurePasswordIsConfirmed();
        $this->created_by = Auth()->User()->id;
        $data = $this->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'role' => ['required'],
            'tel' => ['required'],
            'warehouse' => ['required'],
            'cni' => ['sometimes'],
            'address' => ['sometimes'],
            'dob' => ['sometimes'],
        ]);

        $u->name = $data['name'];
        $u->email = $data['email'];
        $u->tel = $data['tel'];
        $u->dob = $data['dob'];
        $u->cni = $data['cni'];
        $u->warehouse_id = $data['warehouse'];
        $u->address = $data['address'];
        $u->save();

        //Assign Role to User
        $u->assignRole($data['role']);

        //close modal
        $this->createUser = false;
        $this->editUser = false;
    }

    public function delete($id)
    {
        dd($id);
        $this->ensurePasswordIsConfirmed();
        $user = User::find($id);
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
