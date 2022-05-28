<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
      // dd('UserController@index');
      // $users = User::all();
      $users = User::get();
      // dd($users);

      // return view('users/index');
      // return view('users/index', [
      //    'users' => $users
      // ]);
      return view('users/index', compact('users'));//compact = cria um array dinâmico
   }

   public function show($id){
      // dd('UserController@show', $id);
      // $user = User::where('id', $id)->first();
      // $user = User::find($id);
      if (!$user = User::find($id)) {
         // return redirect()->route('users.index');
         return back();
      }

      return view('users.show', compact('user'));

      dd($user);
   }

   public function create(){
      return view('users.create');
   }
   
   public function store(StoreUpdateUserFormRequest $request){
      //como tem que criptografar a senha fica assim
      $data = $request->all();
      $data['password'] = bcrypt($request->password);

      $user = User::create($data);

      // return redirect()->route('users.show', $user->id);
      return redirect()->route('users.index');

      
      /**
       * $user = new User;
       * $user->name = $request->name;
       * $user->email = $request->email;
       * $user->password = $request->password
       * 
       * $user->save();
       * 
       * return redirect()->route('users.index');
       */
      
      // dd('Cadastrando o usuário!!!');
      //dd($request->all()); //pega todos os campos do request
      
      //only = escolhe os campos que deseja pegar pelo o request, pelo o name do input
      // dd($request->only([
      //    '_token', 'name', 'password'
      // ]));

      // return view('users.create');
   }
}
