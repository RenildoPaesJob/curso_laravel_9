@csrf
<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="Email" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit" style="cursor: pointer">Salvar</button>
<a href="{{ route('users.index') }}">voltar</a>