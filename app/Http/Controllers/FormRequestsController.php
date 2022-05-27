<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormQuestionRequests;
use App\Http\Requests\FormRequest;
use App\Models\FormRequests;
use Illuminate\Http\Request;

class FormRequestsController extends Controller
{

    public function createFormRequest(FormQuestionRequests $request){
        $data = [
            'name' => $request->get("name"),
            'email' => $request->get("email"),
            'text' => $request->get("text"),
            'subject' => $request->get("subject"),
        ];

        $data = FormRequests::query()->create($data);

        return response()->json(['success'=> true, 'data'=> $data ], 200);
    }
}
