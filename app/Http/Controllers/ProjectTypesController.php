<?php

namespace App\Http\Controllers;

use App\ProjectType;
use App\PropertyType;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Contact;
use Spatie\Permission\Models\Role;
use LaravelDocusign\Facades\DocuSign;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
class ProjectTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $users = ProjectType::all();
        return view('projects.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('projects.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $request->validate([
            'project_name'=>'required'
        ]);
        $projects = ProjectType::create($request->all());
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       if (! Gate::allows('sales_manage')) {
            return abort(401);
        }

        $projects = ProjectType::find($id);
        $properties = PropertyType::where('project_id', $id)->get();

        return view('projects.show', compact('projects','properties')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $projects   = ProjectType::find($id);
        $properties = PropertyType::where('project_id', $id)->get();

        return view('projects.edit', compact('projects','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $request->validate([
            'project_name'=>'required'
        ]);
        $projects = ProjectType::find($id);
        $projects->update($request->all());
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $projects = ProjectType::find($id);
        $projects->delete();
        return redirect()->route('admin.projects.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        ProjectType::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

    public function addProperty(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $request->validate([
            'property_name'=>'required'
        ]);
        $propertyType = PropertyType::create($request->all());
        if($propertyType){
            echo 1;
        }else{
            echo 0;
        }
    }
    
    public function editProperty(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $property = PropertyType::where('id', $request->property_id)->get();
        return response()->json($property);
    }

    public function updateProperty(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $request->request->add(['property_name' => $request->property_nameup]);
        $property = PropertyType::find($request->property_id);
        $property->update($request->only('property_name'));
        if($property){
            echo 1;
        }else{
            echo 0;
        }
      
    }

    public function detetedProperty(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $propertyType = PropertyType::find($request->property_id);
        $propertyType->delete();
        if($propertyType){
            echo 1;
        }else{
            echo 0;
        }
    }
    
}
