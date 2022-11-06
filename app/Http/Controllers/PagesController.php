<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Pages\CreatePagesRequest;
use App\Http\Requests\Pages\UpdatePagesRequest;
use App\Models\Pages;

class PagesController extends Controller
{
    //

    public function store(CreatePagesRequest $request)
    {
        $validate = $request->validated();

        $pages = new Pages($validate);
        $pages->save();

        if($user) return response()->BaseResponse('200','Page has been successfully created ', '', $pages);
        else return response()->BaseResponse('422','','User has not been created');
    }

    public function update(UpdatePagesRequest $request)
    {
        $validate = $request->validated();

        $pages = Pages::where('id', $request['id']);

        if($pages == null) return response()->BaseResponse('404','Page Entity not found', '', $pages);

        $pages->update($validate);

        if($pages) return response()->BaseResponse('200','Page has been successfully updated', '', $pages);
        else return response()->BaseResponse('422','','Page has not been updated');
    }

    public function destroy($id)
    {
        $pages = Pages::where('id', $id);

        if($pages == null) return response()->BaseResponse('404','Page Entity not found', $pages);
        $pages->delete();
        return response()->BaseResponse('200','','Page has been deleted');
    }

    public function show($id)
    {
        $pages = Pages::where('id', $id);

        if($pages == null) return response()->BaseResponse('404','Page Entity not found', '', $pages);
        return response()->BaseResponse('200','','', $pages);
    }
}
