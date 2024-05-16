<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ParamController extends Controller
{
    private function authorizeParamUpdate(Parameter $param) {
        return auth()->user()->id === $param->user_id;
    }

    public function deleteParam(Parameter $param) {
        if ($this->authorizeParamUpdate($param)) {
            $param->delete();
        }         
        return redirect('/');
    }

    // Actual
    public function actuallyUpdateParam(Parameter $param, Request $request) {
        if ($this->authorizeParamUpdate($param)) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // Use strip_tags to avoid cross-site scripting (xss)
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $param->update($incomingFields);
        return redirect('/');
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
            $incomingFields['param_image_path'] = $imagePath;
        }

        $incomingFields['user_id'] = auth()->id();
        Parameter::create($incomingFields);
        return redirect('/');
    }
}
