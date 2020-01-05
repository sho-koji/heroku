<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    //
    
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profiles = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profiles->fill($form);
        $profiles->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        $profiles = Profile::find($request->id);
        if (empty($profiles)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profiles]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profiles = new Profile;
        $profiles = Profile::find($request->id);
        $profiles_form = $request->all();
        
        unset($form['_token']);
        
        $profiles->fill($profiles_form)->save();
        
        return redirect('admin/profile/edit');
    }
}
