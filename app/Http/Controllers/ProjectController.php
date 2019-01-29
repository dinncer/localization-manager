<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Lang;

class ProjectController extends Controller
{
    /**
     * Project list.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::orderBy('id_project', 'DESC')->paginate(5);
        return view('user.modules.project.index', compact('projects'));
    }

    /**
     * New project.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.modules.project.create');
    }

    /**
     * New project add.
     *
     * @param  ProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());
        return back()->with(['message' => Lang::get('project.crud_add')]);
    }

    /**
     * Project data information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('user.modules.project.edit', compact('project'));
    }

    /**
     * Project data update.
     *
     * @param  ProjectRequest $request
     * @param  int            $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        Project::find($id)->update($request->all());
        return back()->with(['message' => Lang::get('project.crud_update')]);
    }

    /**
     * Remove project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return back()->with(['message' => Lang::get('project.crud_delete')]);
    }
}
