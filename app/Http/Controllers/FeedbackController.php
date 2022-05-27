<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransportRequest;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use App\Models\Transport;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{


    public function createFeedback(FeedbackRequest $request){
        $data = [
            'name' => $request->get("name"),
            'phone' => $request->get("phone"),
            'email' => $request->get("email"),
            'comment' => $request->get('comment'),
            'source_point' => $request->get('source_point'),
            'destination' => $request->get('destination'),
            'package_name' => $request->get('package_name'),
            'volume' => $request->get('volume'),
            'contains' => $request->get('contains'),
            'date' => $request->get('date'),
        ];

        $data = Feedback::query()->create($data);

        return response()->json(['success'=> true, 'data'=> $data ], 200);
    }

    public function changeStatus($id){
        $feedback = Feedback::query()->find($id);

        if (!$feedback)
            return response()->json(['success'=> false ], 404);

        $feedback->status = 1;
        $feedback->save();

        return redirect()->back()->with("success", "Статус изменен!");

    }



    public function createTransport(CreateTransportRequest $request){
        $data = [
            'name' => $request->get("name"),
            'phone' => $request->get("phone"),
            'type' => $request->get("type"),
        ];

        $data = Transport::query()->create($data);

        return response()->json(['success'=> true, 'data'=> $data ], 200);
    }

}
