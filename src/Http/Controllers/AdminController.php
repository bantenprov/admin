<?php namespace Bantenprov\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Admin\Facades\Admin;


/* Models */
use Bantenprov\Admin\Models\AdminModel;
use Bantenprov\LaravelOpd\Models\LaravelOpdModel;
use App\User;

/* ETC */
use Ramsey\Uuid\Uuid;

/**
 * The AdminController class.
 *
 * @package Bantenprov\Admin
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = AdminModel::with('getUser')->get();

        return view('admin::index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::doesntHave('admins')->get();

        $opds = LaravelOpdModel::all();

        return view('admin::create', compact('users', 'opds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'opd_id'      => 'required',
            'user_id'   => 'required|unique:admins',
        ]);

        AdminModel::create([
            'uuid'      => Uuid::uuid5(Uuid::NAMESPACE_DNS, 'bantenprov.go.id'.date('YmdHis')),
            'opd_id'      => $request->opd_id,
            'user_id'   => $request->user_id,
        ]);

        $request->session()->flash('message', 'Successfully add the admin!');

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = AdminModel::find($id);

        return view('admin::show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = AdminModel::find($id);

        $users = User::doesntHave('admins')->get();

        $opds = LaravelOpdModel::all();

        return view('admin::edit', compact('admin','users', 'opds'));
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

        $request->validate([
            'nama'      => 'required',
            'type'      => 'required',
            'user_id'   => 'required|unique:admins,id,'.$id,
        ]);

        AdminModel::find($id)->update([
            'uuid'      => Uuid::uuid5(Uuid::NAMESPACE_DNS, 'bantenprov.go.id'.date('YmdHis')),
            'nama'      => $request->nama,
            'type'      => $request->type,
            'user_id'   => $request->user_id,
        ]);

        $request->session()->flash('message', 'Successfully modified the admin!');

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminModel::find($id)->delete();

        $request->session()->flash('message', 'Successfully delete the admin!');
    }
}
