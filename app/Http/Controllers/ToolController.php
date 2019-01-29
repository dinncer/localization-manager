<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToolWizardRequest;
use App\Models\Project;
use App\Models\Word;
use Lang;

class ToolController extends Controller
{
    /**
     * Copy words as multiple across versions.
     *
     * @return \Illuminate\View\View
     */
    public function wordCopyWizard()
    {
        $projects = Project::orderBy('title', 'ASC')->pluck('title', 'id_project')->all();
        return view('user.modules.tool.wizard', compact('projects'));
    }

    /**
     * Wizard save.
     *
     * @param  ToolWizardRequest $request
     * @return \Illuminate\Http\Response
     */
    public function wordCopyWizardSave(ToolWizardRequest $request)
    {
        $words = Word::where('title', '=', $request->input('title'))
            ->where('version', '=', $request->input('oldVersion'))
            ->where('project_id', '=', $request->input('projectId'))
            ->get();

        foreach ($words as $word) {
            $oldWord = Word::find($word->id_word);
            $newWord = $oldWord->replicate();
            $newWord->version = $request->input('newVersion');
            $newWord->save();
        }

        return back()->with(['message' => Lang::get('tool.wizard_message').count($words)]);
    }
}
