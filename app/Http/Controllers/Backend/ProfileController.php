<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $data = User::find($user);
        return view('admin.profile.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        $data = User::find($user);
        return view('admin.profile.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required|min:5',
            'mobile' => 'required|numeric',
            'gender' => 'required',
        ]);
        $user = Auth::user()->id;
        $data = User::find($user);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;

        // Image uploads
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images' . $data->image));
            $filename = date('Ymd').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image/'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function passwordView()
    {
        return view('admin.profile.editPassword');
    }

    public function passwordUpdate(Request $request)
    {
        if (Auth::attempt(['id' => Auth::user()->id, 'password' => $request->old_password])) {
            $this->validate($request, [
                'new_password' => 'required| min:8',
                // 'password2' => ['required', Rule::in(['password2', 'new_password'])]
            ]);

            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->route('user.index');
        } else {
            return redirect()->back();
        }
    }
}
