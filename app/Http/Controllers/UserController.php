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
      return view('users.index', compact('users'));//compact = cria um array dinâmico
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
      $data = $request->all();//pegar todas as info. do id passado pelo request
      $data['password'] = bcrypt($request->password);

      User::create($data);

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

   public function edit($id){
      if (!$user = User::find($id)) {
         return redirect()->route('users.index');
      }

      return view('users.edit', compact('user'));
   }
   
   public function update(StoreUpdateUserFormRequest $request, $id){
      if (!$user = User::find($id)){
         return redirect()->route('users.index');
      }
      /**validação, campo por campo*/
      // $user->name = $request->name;
      // $user->name = $request->get('name');
      // $user->save();

      /**validação, no padrão Laravel */
      // $user->update($request->all()); or
      // $data = $request->all();
      $data = $request->only('name', 'email');

      if ($request->password) {
         $data['password'] = bcrypt($request->password);
      }

      $user->update($data);
      return redirect()->route('users.index');

      // dd($request->all());
      // return view('users.edit', compact('user'));
   }
}
