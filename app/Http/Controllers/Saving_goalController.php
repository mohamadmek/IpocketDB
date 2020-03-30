<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving_goal;

class Saving_goalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saving_goal = Saving_goal::all();

        if(!$saving_goal){
            return response()->json([
                'status' => 'failed',
                'message' => 'No saving_goal was founded'  
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'saving_goal' => $saving_goal 
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $saving_goal = new Saving_goal();
        $saving_goal->fill(inputs);
        $saving_goal->save();

        if(!$saving_goal){
            return response()->json([
                'status' => 'failed',
                'message' => 'No saving_goal was added'  
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'saving_goal was added',
            'saving_goal' => $saving_goal 
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saving_goal = Saving_goal::where('id', $id)->first();

        if(!$saving_goal){
            return response()->json([
                'status' => 'failed',
                'message' => 'No saving_goal was founded with $id'  
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'saving_goal' => $saving_goal 
        ], 200);
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
        $imputs = $request->all();
        $saving_goal = Saving_goal::where('id', $id)->first();

        $saving_goal->update($inputs);
        $saving_goal->save();
        
        if(!$saving_goal){
            return response()->json([
                'status' => 'failed',
                'message' => 'could not update saving_goal with id $id'  
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'saving_goal' => $saving_goal 
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saving_goal = Saving_goal::where('id', $id)->destroy();

        if(!$saving_goal){
            return response()->json([
                'status' => 'failed',
                'message' => 'could not delete saving_goal with id $id'  
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'saving_goal is id: $id is deleted'
        ], 200);
    }
}
