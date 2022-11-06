<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Resources\CreateResourceRequest;
use App\Http\Requests\Resources\UpdateResourceRequest;
use App\Models\Resources;

class ResourcesController extends Controller
{
    //

    public function store(CreatePagesRequest $request)
    {
        $validate = $request->validated();

        $resources = new Resources($validate);
        $resources->save();

        if($user) return response()->BaseResponse('200','Resources has been successfully created ', '', $resources);
        else return response()->BaseResponse('422','','User has not been created');
    }

    public function update(UpdateResourceRequest $request)
    {
        $validate = $request->validated();

        $resources = Resources::where('id', $request['id']);

        if($resources == null) return response()->BaseResponse('404','Resources Entity not found', '', $resources);

        $resources->update($validate);

        if($resources) return response()->BaseResponse('200','Resources has been successfully updated', '', $resources);
        else return response()->BaseResponse('422','','Resources has not been updated');
    }

    public function destroy($id)
    {
        $resources = Resources::where('id', $id);

        if($resources == null) return response()->BaseResponse('404','Resources Entity not found', $resources);
        $resources->delete();
        return response()->BaseResponse('200','','Resources has been deleted');
    }

    public function show($id)
    {
        $resources = Resources::where('id', $id);

        if($resources == null) return response()->BaseResponse('404','Resources Entity not found', '', $resources);
        return response()->BaseResponse('200','','', $resources);
    }
}
