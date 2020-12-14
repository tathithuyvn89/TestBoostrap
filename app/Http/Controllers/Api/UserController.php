<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Resources\UserResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    const ITEM_PER_PAGE = 15;
    public function index(Request $request)
    {     
         $searchParams =  $request->all(); 
            if(empty($searchParams)){
                return UserResource::collection(User::all());       
            }else{
                $keyword = Arr::get($searchParams,'keyword','');
                $current_page = Arr::get($searchParams,'page',1);
                 $query = User::query();
                if(!empty($keyword)){
                    $query->where('name','LIKE','%' .$keyword. '%');
                    $query->orWhere('email','LIKE','%' .$keyword. '%');
                }
                 return UserResource::collection($query->paginate(static::ITEM_PER_PAGE,['*'],'page',$current_page)); 
            }
    }

    
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),
       array_merge($this->getValidationRules(),
                [
                    'password'=> ['required', 'min:6'],
                    'confirmPassword'=> 'same:password'
                ]
            )
        );
        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()],403);
        } else {
            $data = $request->all();

           $newUser = User::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>Hash::make($data['password']),
            ]);
            return new UserResource($newUser);
        }

    }
  
    public function show($id)
    {
        try{
            $userDB = User::findOrFail($id);
            return new UserResource($userDB);
        } catch(ModelNotFoundException $ex)
        {
            return response()->json(['error'=>'NOT FOUND'],404);
        }    
    }
  
    public function update(Request $request, $id)
    {
         try{
            $userDB = User::findOrFail($id);
             //Just update email, name
            $email =  $request->get('email');
            $name = $request->get('name');
            $avatar = $request->get('avatar');
            if(!empty($email)&&!empty($name)) {
                $validator = Validator::make($request->all());
               if($this->isExistEmail) {
                   return response()->json(['error'=>'Email is exist']);
               }
               $userDB->email = $email;
               $userDB->name = $name;
               $userDB->save();
            }
            if(!empty($avatar)){
                $request->validate([
                   'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            $current_avatar = $userDB->avatar;
            $avatar_name =  $user->id.'_avatar'.time().'.'.$request->avatar->getClientOriginalExtention();
            $request->avatar->storeAs('public/avatars',$avatar_name);
            $userDB->save();
            // Old avatar will be remove
            if($current_avatar != 'default-avatar.jpg' || $current_avatar != null )
               Storage::delete(['public/avatars/'.$current_avatar]);
            }
            return response()->json(['message'=>'UPDATE SUCCESS'],200);

        } catch(ModelNotFoundException $ex)
        {
            return response()->json(['error'=>'NOT FOUND'],404);
        } catch(Exception $e) 
        {
             return response()->json(['error'=>'UPDATE FAIL'],500);
        }
       
       
    }

    public function destroy($id)
    {
         try{
            $userDB = User::findOrFail($id);
             $userDB->delete();
            return response()->json(['message'=>'DELETE SUCCESS'],200);
        } catch(ModelNotFoundException $ex)
        {
            return response()->json(['error'=>'NOT FOUND'],404);
        }    
    }
    private function getValidationRules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users',
        ];
    }
    private function isExistEmail($email) {
       $foundEmail = User::where('email',$email)->first();
       if($foundEmail){
           return true;
       }
       return false;
    }
}
