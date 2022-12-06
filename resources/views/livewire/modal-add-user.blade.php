<div>
    <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div id="erroresFormAddUser">
        @error('apellidoPat')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
        @error('apellidoMat')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
        @error('nombres')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
        @error('email')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
        @error('centroOPt')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
        @error('area')
            <div class="input-group mb3"> <span
                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
            </div>
        @enderror
    </div>
    <form wire:submit.prevent="submit" method="POST">
        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="datos-user">
            <!------------Llenar datos ------------->
            <div id="relleno-nav"></div>
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Apellidos</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input type="text" wire:model="apellidoPat" class="form-control" placeholder="Primer apellido"
                    aria-label="Primer apellido" id="apellidoPat" aria-describedby="basic-addon1">
                <input type="text" wire:model="apellidoMat" id="apellidoMat" class="form-control"
                    placeholder="Segundo apellido" aria-label="Segundo apellido" aria-describedby="basic-addon1">
            </div>
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Nombre(s)</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input type="text" wire:model="nombres" id="nombres" class="form-control" placeholder="Nombre(s)"
                    aria-label="Name" aria-describedby="basic-addon1">
            </div>
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Correo</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input type="text" wire:model="email" id="email" class="form-control" placeholder="Email"
                    aria-label="mail" aria-describedby="basic-addon1">
            </div>
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Centro de adscripción
            </label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-building-fill"></i></span>
                <select class="form-control" wire:model="centroOPt" id="centroOPt">
                    <option value="0">Selecciona una opcion</option>
                    @foreach ($centros as $centro)
                        <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Área de interes</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input type="text" wire:model="area" id="area" class="form-control"
                    placeholder="Ejemplo: MicroCircuitos,Computacion,BigData" aria-label="mail"
                    aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="bg-[#00B8E4] font-bold w-20 p-2 text-white rounded-lg mt-1.5"
                data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="bg-[#003B5C] font-bold w-30 p-2 text-white rounded-lg mt-1.5">Guardar</button>
        </div>
    </form>
</div>
