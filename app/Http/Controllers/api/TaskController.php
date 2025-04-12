<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
     
  public function create(Request $request)
  {
     if(!Auth::User())
     {
        return response()->json([
           'status'=>401,
           'message'=>'INVALID'


        ]);
     }

    $validator = Validator::make($request->all(), [
        'title' => 'required|min:3',
        'description' => 'required',
        'status' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->errors()
        ], 422);
    }

    Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'status' => $request->status
    ]);

    return response()->json([
        'status' => 200,
        'message' => 'Task Created successfully',
    ]);
}



     public function singletask(Request $request,$id)
     {
        $data =Task::where('id',$id)->first();
        if($data){
            return response()->json([
                'message' =>"Single  Task",
                'data' =>$data
            ]);
        }
        else{
              return response()->json([
                    'status' =>404,
                    'message' =>'Record  not found'
              ]); 
            }

     }



     public function taskbystatus(Request $request,$status)
     {
        
         $data =Task::where('status',$status)->get();
        
         if($data){
              return response()->json([
                  'message' =>"Task by status",
                  'data' =>$data

              ]);
          }
          else{
                return response()->json([
                      'status' =>404,
                      'message' =>'Record  not found'
                ]); 
              }

     }


     public  function update(Request $request,$id)
     {
        
          $validator = Validator::make($request->all(), [
              'title' => 'required|min:3',
              'description' => 'required',
              'status' => 'required'
          ]);

          if ($validator->fails()) {
              return response()->json([
                  'status' => 422,
                  'errors' => $validator->errors()
              ], 422);
          }

            $taskdata =Task::find($id);
             if($taskdata)
             {

               $data = Task::find($id)->update([
                 'title'=>$request->title,
                 'description'=>$request->description,
                 'status'=>$request->status
               ]);
               return response()->json([
               	       'id' =>$id,
                      'status' =>200,
                      'message' =>'Record updated successfully'
                ]);

            }
            else{

            	  return response()->json([
               	      'status' =>404,
                      'message' =>'Record  not found'
                ]); 

             }
     }


     public function taskdelete(Request $request,$id)
     {
          $taskdata =Task::find($id);
             if($taskdata)
             {
             	    Task::find($id)->delete();
             	    return response()->json([
                     'status' =>200,
                     'message' =>'Task deleted successfully'
                    ]);
             }
             else
             {
                return response()->json([
                     'status' =>404,
                     'message' =>'Record  not found'
                ]);
             }

             
     }


     public function tasks()
     {
     	  $data = Task::all();
     	  return response()->json([
              'message' =>"Task list",
              'data' =>$data
         ]);

     }



      public function logout(Request $request)
      {
          $request->user()->currentAccessToken()->delete();
           return response()->json([
              'message' => 'Logout successful'
          ], 200);
      }

}
