<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Lang;

class LanguageController extends AdminController
{
    /**
     * Languages list.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $languages = Language::orderBy('id_language', 'DESC')->paginate(5);
        return view('admin.modules.language.index', compact('languages'));
    }

    /**
     * New language.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.modules.language.create');
    }

    /**
     * New language add.
     *
     * @param  LanguageRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
        Language::create($request->all());
        return back()->with(['message' => Lang::get('language.crud_add')]);
    }

    /**
     * Language data information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.modules.language.edit', compact('language'));
    }

    /**
     * Language date update.
     *
     * @param  LanguageRequest $request
     * @param  int             $id
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageRequest $request, $id)
    {
        Language::find($id)->update($request->all());
        return back()->with(['message' => Lang::get('language.crud_update')]);
    }

    /**
     * Remove language.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Language::findOrFail($id)->delete();
        return back()->with(['message' => Lang::get('language.crud_delete')]);
    }
}
