<?php

namespace App\Http\Controllers;

use App\Http\Requests\WordRequest;
use App\Models\Word;
use App\Models\Project;
use App\Models\Language;

use Lang;

class WordController extends Controller
{
    /**
     * Word list.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $words = Word::with('project')->with('language')->orderBy('id_word', 'DESC')->paginate(10);
        return view('user.modules.word.index', compact('words'));
    }

    /**
     * New word.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $projects = Project::orderBy('title', 'ASC')->pluck('title', 'id_project')->all();
        $languages = Language::orderBy('name', 'ASC')->pluck('name', 'id_language')->all();
        return view('user.modules.word.create', compact('words', 'projects', 'languages'));
    }

    /**
     * New project add.
     *
     * @param  WordRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WordRequest $request)
    {
        Word::create($request->all());
        return back()->with(['message' => Lang::get('word.crud_add')]);
    }

    /**
     * Project data information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::findOrFail($id);
        $projects = Project::orderBy('title', 'ASC')->pluck('title', 'id_project')->all();
        $languages = Language::orderBy('name', 'ASC')->pluck('name', 'id_language')->all();
        return view('user.modules.word.edit', compact('word', 'projects', 'languages'));
    }

    /**
     * Project data update.
     *
     * @param  WordRequest $request
     * @param  int            $id
     * @return \Illuminate\Http\Response
     */
    public function update(WordRequest $request, $id)
    {
        Word::find($id)->update($request->all());
        return back()->with(['message' => Lang::get('word.crud_update')]);
    }

    /**
     * Remove word.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Word::findOrFail($id)->delete();
        return back()->with(['message' => Lang::get('word.crud_delete')]);
    }
}
