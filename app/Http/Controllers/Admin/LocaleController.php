<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Locale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Gate;

class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('locale_manager_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $page_title = 'Locale Manager';
        return view('admin.setting.locale', compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $locale = Locale::where('id', $request->id)->first();

            $jsonString = file_get_contents(resource_path() . '/lang/' . $locale->code . '.json');
            $datas = json_decode($jsonString, true);
            // Update Key
            $datas[$request->string] = $request->translation;
            // Write File
            $newJsonString = json_encode($datas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents(resource_path() . '/lang/' . $locale->code . '.json', stripslashes($newJsonString));

            $notify[] = ['success', 'String added successfully'];
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success' => true,
                    'type' => 'error',
                    'message' => $th
                ]
            );
        }
        return response()->json(
            [
                'success' => true,
                'type' => $notify[0][0],
                'message' => $notify[0][1]
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('locale_manager_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $locale = Locale::where('id', $id)->first();
        $page_title = $locale->title . ' Editor';
        $filePath = resource_path() . '/lang/' . $locale->code . '.json';

        // Check if the file exists
        if (!File::exists($filePath)) {
            return response()->json([
                'type' => 'error',
                'message' => 'Language file not found',
            ], 500);
        }

        $fileContent = File::get($filePath);
        $decodedJson = json_decode($fileContent, true);

        // Check if the decoded JSON is valid
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'type' => 'error',
                'message' => 'Invalid JSON in the language file',
                'fileContent' => $fileContent, // Add the file content to the response
                'jsonError' => json_last_error_msg(), // Add the JSON error message to the response
            ], 500);
        }

        $strings = arrayToObject($decodedJson);
        return view('admin.setting.locale_edit', compact('locale', 'page_title', 'strings'));
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
        $locale = Locale::findOrFail($id);
        $filePath = resource_path("lang/{$locale->code}.json");
        $jsonData = File::get($filePath);
        $data = json_decode($jsonData, true);

        if (!is_array($data)) {
            return response()->json([
                'type' => 'error',
                'message' => 'Invalid Key',
            ], 500);
        }

        $convertedValue = mb_convert_encoding($request->value, 'UTF-8', 'auto');
        $data[$request->key] = $convertedValue;
        $newJsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        try {
            File::put($filePath, $newJsonData);
        } catch (\Throwable $e) {
            return response()->json([
                'type' => 'error',
                'message' => 'String update failed',
            ], 500);
        }

        (new Locale)->clearCache();
        return response()->json([
            'type' => 'success',
            'message' => 'String updated successfully',
        ]);
    }
}
