<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|min:3',
                'section' => 'required',
            ]);

            $user = Auth::user();
            $class = new Classroom([
                'name' => $request->name,
                'section' => $request->section
            ]);
            $class->save();
            // var_dump($class);
            return back()->with('success', 'Successfull Created');
        } catch (\Exception $e) {
            // error_log($e);
            return back()->with('fail', $e->getMessage());;
        }
    }

    public function showCreatePage() {
        return view('Admin.class-create');
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
     * @return \Illuminate\Http\Response b
     */
    public function showall()
    {
        try {
            $classess = Classroom::with(['students'=>function($query) {
                $query->select('classroom_id', DB::raw(' count(classroom_id) as total_student'))
                    ->groupBy('classroom_id');
            }])
                ->get();
                            // $users = User::with(['posts' => function ($query) {
                            //     $query->select('id', 'user_id', 'title', 'created_at');
                            //   }])->get();
            return $classess;
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response b
     */
    public function show($id)
    {
        try {
            $classess = Classroom::where('id',$id)
                            ->orWhere('name',$id)->first();
            var_dump($classess);
        } catch (\Exception $e) {
            error_log($e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $request->validate([
                'name' => 'required|min:3',
                'section' => 'required',
            ]);
            // error_log($request->all());
            $class = Classroom::firstWhere('id',$id)
                        ->update($request->all());
            return back()->with('success', 'Successfull Updated');
        } catch (\Exception $e) {
            // $error_log($e);
            return back()->with('fail', $e->getMessage());
        }
    }

    public function showUpdatePage($id)
    {
        $class = Classroom::firstWhere('id',$id);
        return view('Admin.class-update')->with(['classes'=>$class]);
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
}
