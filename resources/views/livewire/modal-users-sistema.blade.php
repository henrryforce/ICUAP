<div>
    <div id="validarErrores">
        <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
    <form wire:submit.prevent="submit" method="POST">

        <div class="mb-2">
            <label for="user" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
            <input id="user" wire:model='usuario' name="user" type="text" placeholder="Tu nombre de usuario"
                class="border w-full p-2 rounded-lg ">
            @error('usuario')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
            <input id="password" wire:model='password' name="password" type="password"
                placeholder="Tu password de registro" class="border w-full p-2 rounded-lg ">
            @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold">Tipo de usuario</label>
            <select id="tipo_user" wire:model='tipoUser' class="border w-full p-2 rounded-lg bg-white">
                <option selected="0">Elija un usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Capturista</option>
            </select>
            @error('tipoUser')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                password</label>
            <input id="password_confirmation" wire:model='password_confirmation' name="password_confirmation"
                type="password" placeholder="Repite tu password" class="border w-full p-2 rounded-lg ">
                
        </div>
        <input type="submit" id="btnAltaUser" value="Crear Cuenta"
            class="bg-[#003B5C] font-bold w-100 p-3 text-white rounded-lg mt-2" />
    </form>

</div>
