<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enums\UserTypeEnum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['headers'] = [
            'Image',
            'Name',
            'Email',
            'Type',
            'Created At',
            'Action'
        ];
        $data['users'] = User::latest()->paginate(10);
        return view('admin.users.index', $data);
    }

    public function create(Request $request)
    {
        $data ['types'] = UserTypeEnum::cases();
        return view('admin.users.create', $data);
    }

    public function store(Request $request )
    {
       $validated =  $request->validate([
            'image' => ['bail','nullable','image', 'max:1024'],
            'name' => ['bail', 'required', 'string', 'max:255'],
            'email' => ['bail', 'required', 'email', 'max:255'],
            'password' => ['bail', 'required', 'string',Password::defaults(), 'confirmed'],
            'description' => ['bail', 'required', 'string', 'min:10'],
            'type' => ['bail', 'required', Rule::in(UserTypeEnum::values())]

        ]);

        $validated['password'] = Hash::make($request->password);

        if($request->image){
            $validated['image'] = $request->file('image')->store('images');
        }
     User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    
    }
}
