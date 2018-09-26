<?php

namespace App\Http\Controllers\Custom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Model\UserPermission;
use Auth;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:user-list');
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
         
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo "User Permission";
        $permissions = UserPermission::orderBy('id','DESC')->paginate(10);
        // return view('permission.index');
        return view('admin.pages.spatie.permission.index',compact('permissions'))
            ->with('i', ($request->input('page', 1) - 1) * 10)
            ->with(['menu'=>'user_permission']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.spatie.permission.create')
        ->with(['menu'=>'user_permission']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required|unique:name|max:255',
            'name' => 'required|max:255',
            'guard_name' => 'required|max:255'
        ]);
        // dd($request);
        $user = UserPermission::create($request->all());

        return redirect()->route('user_permission.index')
                        ->with('success','Permission created successfully')
                        ->with(['menu'=>'user_permission']);
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $UserPermission = UserPermission::find($id);
        // dd($UserPermission);
        return view('admin.pages.spatie.permission.show',compact('UserPermission'))->with(['menu'=>'user_permission']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $UserPermission = UserPermission::find($id);
        // echo Auth::user()->id;
        // exit;
        // dd($UserPermission);

        return view('admin.pages.spatie.permission.edit',compact('UserPermission'))->with(['menu'=>'user_permission']);
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
            'name' => 'required|max:255',
            'guard_name' => 'required|max:255'
        ]);
        echo $request->name;

        $input = $request->all();
        $user = UserPermission::find($id);
        $user->update($input);
        // DB::table('model_has_roles')->where('model_id',$id)->delete();
        return redirect()->route('user_permission.index')
                        ->with('success','Permission updated successfully')
                        ->with(['menu'=>'user_permission']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserPermission::find($id)->delete();
        return redirect()->route('user_permission.index')
                        ->with('success','Permission deleted successfully')
                        ->with(['menu'=>'user_permission']);
    }
}
