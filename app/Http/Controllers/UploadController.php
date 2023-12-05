<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 检查文件是否存在且上传成功
        if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
            $upload = new Upload();
    
            // 获取 MIME 类型
            $upload->mimeType = $request->file('upload')->getMimeType();
            $upload->originalName = $request->file('upload')->getClientOriginalName();
            $upload->path = $request->file('upload')->store('uploads');
            $upload->save();
    
            return view('uploads.create', [
                'id' => $upload->id,
                'path' => $upload->path,
                'originalName' => $upload->originalName,
                'mimeType' => $upload->mimeType
            ]);
        } else {
            // 文件上传失败，输出调试信息
            dd('File upload failed. Check the uploaded file.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Upload $upload,$originalName='')
    {
        $upload =   Upload::findOrFail($upload->id);
        return response()->file(storage_path().'/app/'.$upload->path);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
