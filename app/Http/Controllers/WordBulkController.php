<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use Excel;
use Lang;

class WordBulkController extends Controller
{
    /**
     * CSV import form.
     *
     * @return \Illuminate\View\View
     */
    public function import()
    {
        return view('user.modules.wordbulk.import');
    }

    /**
     * Save words export in CSV format.
     *
     * @return \Illuminate\Http\Response
     */
    public function csvExport()
    {
        $words = Word::get(['id_word','title','vocable','version','language_id','project_id'])->toArray();
        return Excel::create('words_csv_file', function ($excel) use ($words) {
            $excel->sheet('WordSheet', function ($sheet) use ($words) {
                $sheet->fromArray($words);
            });
        })->download('csv');
    }

    /**
     * Ixmport in CSV format.
     *
     * @return \Illuminate\Http\Response
     */
    public function csvImport(Request $request)
    {
        $csvFile = $request->file('word')->getRealPath();
        $words = Excel::load($csvFile)->get();
        if ($words->count()) {
            foreach ($words as $word) {
                $updateWord = ['id_word' => $word->id_word,
                    'title' => $word->title,
                    'vocable' => $word->vocable,
                    'version' => $word->version,
                    'language_id' => $word->language_id,
                    'project_id' => $word->project_id
                ];
                Word::find($word->id_word)->update($updateWord);
            }
        }
        return back()->with(['message' => Lang::get('wordbulk.message').count($words)]);
    }
}
