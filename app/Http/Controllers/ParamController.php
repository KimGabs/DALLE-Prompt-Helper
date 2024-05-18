<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class ParamController extends Controller
{
    private function authorizeParamUpdate(Parameter $param) {
        return auth()->user()->id === $param->user_id;
    }

    public function deleteParam(Parameter $param) {
        if ($this->authorizeParamUpdate($param)) {
            if ($param->param_image_path) {
                Storage::delete('public/images/' . $param->param_image_path);
            }
            $param->delete(); 
            return redirect()->back()->with('Success', 'Parameter Delete Successful');
        }         
        return redirect()->back()->with('Success', 'Parameter Delete Failed');
    }

    // Actual Update
    public function updateParam(Request $request, $id) {

        $parameter = Parameter::findOrFail($id);
        
        if(auth()->user()->id !== $parameter->user_id){
            return redirect('/');
        }
        
        $request->validate([
            'param_name' => 'required',
            'param_type' => 'required',
            'param_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048' // adjust file type and size as needed
        ]);

        // return redirect()->back()->with('Success', $request->file('param_image'));

        if($request->hasFile('param_image')) {

            //  Delete the old image
            if ($parameter->param_image_path) {
                Storage::delete('public/images/' . $parameter->param_image_path);
            }
    
            // Store the new image
            $imagePath = $request->file('param_image')->store('images', 'public');
            $imageName = basename($imagePath);
    
            $parameter->param_image_path = $imageName;
        }

        $parameter->param_name = strip_tags($request->input('param_name'));
        $parameter->param_type = strip_tags($request->input('param_type'));
        $parameter->save();
    
        return redirect()->back()->with('Success', 'Parameter updated successfully');
    }    

    // Create parameter
    public function createParam(Request $request){
        $incomingFields = $request->validate([
            'param_name' => 'required',
            'param_type' => 'required',
            'param_image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $incomingFields['param_name'] = strip_tags($incomingFields['param_name']);
        $incomingFields['param_type'] = strip_tags($incomingFields['param_type']);

        if ($request->file('param_image_path')) {
            $imagePath = $request->file('param_image_path')->store('images', 'public');
            $imageName = basename($imagePath);
            $incomingFields['param_image_path'] = $imageName;
        }

        $incomingFields['user_id'] = auth()->id();
        Parameter::create($incomingFields);
        return redirect()->back()->with('Success', 'New Parameter Added');
    }
}
