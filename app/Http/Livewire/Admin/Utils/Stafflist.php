<?php

namespace App\Http\Livewire\Admin\Utils;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Storage;

class Stafflist extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {
        return [
            Column::callback(['profile_photo_path', 'name'], function($photo, $name)
            {
                if($photo){
                    return '<img class="h-10 w-10 my-auto rounded-full object-cover" src="'.Storage::url($photo).'" alt="'.$name.'">';
                } else {
                    return '<img class="h-10 w-10 my-auto rounded-full object-cover" src="https://ui-avatars.com/api/?name='.$name.'&amp;color=7F9CF5&amp;background=EBF4FF" alt="'.$name.'">';
                }
            }),


            Column::name('name')
                ->label('Employee')
                ->searchable(),


            Column::callback(['email', 'email_verified_at'], function($email, $verified) 
            {
                if($verified == null){
                    return $email.' <br> <span class="font-bold text-red-400 text-center text-sm">[not verified]</span>';
                } else {
                    return $email.' <br> <span class="font-bold text-green-400 text-center text-sm">[verified]</span>';
                }
            })
                ->label('Email'),

            Column::callback(['id'], function($id) {
                $u = User::find($id);
                $roles = $u->getRoleNames();
                foreach ($roles as $r) {
                    return '<span class="font-bold uppercase">'.$r.'</span>';
                }
            })
                ->label('Role'),
            
            Column::callback(['id','warehouse_id'], function($id,$warehouse_id) {
                if($warehouse_id) {
                   $user = User::with('warehouse')->find($id);
                    return $user->warehouse->name; 
                } else {
                    return '<span class="text-red-400 text-sm font-bold">[not assigned]</span>';
                }
                

            })
                ->label('Branch'),

            
            Column::callback(['id', 'name'], function($id, $name) {
                return view('livewire.admin.utils.stafflist-actions', ['id' => $id]);
            })
                ->label(''),




        ];
    }

}