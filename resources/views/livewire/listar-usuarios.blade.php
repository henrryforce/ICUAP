
    <div class="mt-12 md:flex">
        <div class="md:w-1/2 lg:w-2/5 mx-5">
            <div id="validarErrores">
                <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            <h2 class="font-black text-3xl text-center">Editar usuarios</h2>
            <form wire:submit.prevent="submit" method="POST" class="bg-white shadow-md rounded-lg py-10 px-5">
                <div class="mb-4">
                    <label for="user" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
                    <input id="user" wire:model='usuario' name="user" type="text"
                        placeholder="Tu nombre de usuario" class="border w-full p-2 rounded-lg " disabled>
                    @error('usuario')
                        <p class="bg-[#00B8E4] text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold">Tipo de
                        usuario</label>
                    <select id="tipo_user" wire:model='tipoUser' class="border w-full p-2 rounded-lg bg-white">
                        <option selected="0">Elija un usuario</option>
                        <option value="1">Administrador</option>
                        <option value="2">Capturista</option>
                    </select>
                    @error('tipoUser')
                        <p class="bg-[#00B8E4] text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label><input type="checkbox" wire:model="actualizarP" value="true">Actualizar Contraseña</label>
                </div>
                @if ($actualizarP)
                    <div class="mb-2">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" wire:model='password' name="password" type="password"
                        placeholder="Tu password de registro" class="border w-full p-2 rounded-lg ">
                    @error('password')
                        <p class="bg-[#00B8E4] text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        password</label>
                    <input id="password_confirmation" wire:model='password_confirmation'
                        name="password_confirmation" type="password" placeholder="Repite tu password"
                        class="border w-full p-2 rounded-lg ">
                </div>
                @endif
                <input type="submit" id="editarUsuario" value="Editar Cuenta"
                    class="bg-[#003B5C] font-bold w-100 p-3 text-white rounded-lg mt-2" />
            </form>
        </div>
        <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
            {{-- <h2 class="font-black text-3xl text-center">No hay usuarios registrados</h2>
        <p class="text-xl mt-5 mb-10 text-center">comienza agregando un usuario <span>y aparecerán en este lugar</span></p> --}}
            @foreach ($usuarios as $usuario)
                <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
                    <div class="px-6 py-4">
                        @if ($usuario->tipo_user == 1)
                            <div class="font-bold text-xl mb-2">Administrador</div>
                        @else
                            <div class="font-bold text-xl mb-2">Capturista</div>
                        @endif

                        <a class="decoration-solid">Usuario</a>
                        <a>{{ $usuario->user }}</a>

                    </div>
                    <div class="flex justify-end">

                        <button type="button"
                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#00B8E4] rounded-full"
                            wire:click="borrarUsuario('{{ $usuario->id }}')">Eliminar</button>

                        <button type="button"
                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full"
                            wire:click="editarUsuario('{{ $usuario->user }}','{{ $usuario->tipo_user }}','{{ $usuario->id }}')">Editar</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
