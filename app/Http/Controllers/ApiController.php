<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Word;

class ApiController extends Controller
{
    /**
     * Language list.
     *
     * @return \Illuminate\Http\Response
     */
    public function languages()
    {
        $languages = Language::get(['id_language', 'name','language_code', 'country_code']);
        if ($languages) {
            return response()->json($languages, 200);
        } else {
            return response()->json([
                'status' => '500'
            ]);
        }
    }

    /**
     * Locale words list.
     *
     * @return \Illuminate\Http\Response
     */
    public function locale(Request $request, $project_id)
    {
        $version = $request->input('version');
        $language_code = $request->input('language_code');
        if (!empty($language_code)) {
            $language_code = Language::where('language_code', '=', $language_code)->get(['id_language'])->first();
        }
        $keyword = $request->input('keyword');

        $locale = Word::where('project_id', '=', $project_id)
            ->when($version, function ($query) use ($version) {
                return $query->where('version', '=', $version);
            })
            ->when($language_code, function ($query) use ($language_code) {
                return $query->where('language_id', '=', $language_code->id_language);
            })
            ->when($keyword, function ($query) use ($keyword) {
                return $query->where('title', '=', $keyword);
            })
            ->get(['title', 'vocable']);

        if ($locale) {
            return response()->json($locale, 200);
        } else {
            return response()->json([
                'status' => '500'
            ]);
        }
    }
}
