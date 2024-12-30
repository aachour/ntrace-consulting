<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserForm extends Component
{
    use AuthorizesRequests;

    public $roles;
    public $users;
    
    public  $user;
    
    public string $first_name = "";
    public string $last_name = "";
    public string $username = "";
    public string $email = "";
    public $role_name;

    public string $phone = "";
    public string $password = "";
    public string $password_confirmation = "";

    public bool $editing = false;
    public int $status;


    protected $listeners = ['store', 'update'];

    public function mount($id = 0, $status = 0)
    {
        $this->authorize('user-list');
        $this->roles = Role::all();

        $this->status=$status;

        $this->users = User::all();

        if ($id) {

            $this->editing = true;
            $this->user = User::find($id);

            $this->first_name = $this->user->first_name;
            $this->last_name = $this->user->last_name;
            $this->username = $this->user->username;
            $this->email = $this->user->email;

            $this->phone = $this->user->phone;

            $this->role_name = $this->user->roles[0]->name ?? "";

            $this->users = User::where('id', '<>', $id)->get();

        }
    }

    public function rules()
    {
        return [

            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['nullable', 'email'],
            'role_name' => ['required', Rule::exists('roles', 'name')],

            'phone' => ['required'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function store()
    {

        $this->authorize('user-create');
        $this->validate();
        
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),

        ]);


        $user->assignRole($this->role_name);

        return to_route('users')->with('success', 'User has been created successfully!');
    }

    public function update()
    {

        
        $this->authorize('user-edit');

        $this->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'username' => ['required', Rule::unique('users', 'username')->ignore($this->user->id)],
            'email' => ['nullable', 'email'],
            'role_name' => ['required', Rule::exists('roles', 'name')],

            'phone' => ['required'],
            'password' => ['nullable', 'confirmed']
        ]);

        $this->user->first_name = $this->first_name;
        $this->user->last_name = $this->last_name;
        $this->user->username = $this->username;
        $this->user->email = $this->email;

        $this->user->phone = $this->phone;
        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }

        $this->user->syncRoles([$this->role_name]);

        $this->user->save();

        return to_route('users')->with('success', 'User has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.users.user-form');
    }
}
