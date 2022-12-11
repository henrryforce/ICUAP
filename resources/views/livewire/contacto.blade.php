<div>
    <section id="contacto" class="contact section">
        <div class="container">
            <h2 class="section-title">Contactanos</h2>
            <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form class="contact-form box-shadow-1" wire:submit.prevent='formEmail'>
                <input type="text" wire:model='nombre' placeholder="Ingresa tu nombre *"
                    title="Nombre sólo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
                <div>
                    @error('nombre')
                        <div class="input-group mb3"> <span
                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <input type="email" wire:model='correo' name="email" placeholder="Ingresa tu correo *"
                    title="Email incorrecto"
                    pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$">
                <div>
                    @error('correo')
                        <div class="input-group mb3"> <span
                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <textarea name="comments" wire:model='mensaje' cols="50" rows="10" placeholder="Déjanos tus comentarios *"></textarea>
                <div>
                    @error('mensaje')
                        <div class="input-group mb3"> <span
                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="contact-form-loader text-center none">
                    <img src=" assets/loader.svg" alt="Enviando...">
                </div>
                <input
                    class="bg-[#003B5C] font-bold w-100 p-3 text-white rounded-lg mt-2 hover:rgba(0, 59, 92, 0.75) content-center"
                    type="submit" value="ENVIAR MENSAJE">
            </form>
            <article id="gracias" class="modal">
                <div class="modal-content">
                    <article class="contact-form-response">
                        <h3>
                            ¡Muchas Gracias!
                            <br>
                            Por tus comentarios
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,18c4,0,5-4,5-4H7C7,14,8,18,12,18z" />
                            <path
                                d="M12,2C6.486,2,2,6.486,2,12c0,5.514,4.486,10,10,10s10-4.486,10-10C22,6.486,17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                            <path
                                d="M13 12l2 .012C15.012 11.55 15.194 11 16 11s.988.55 1 1h2c0-1.206-.799-3-3-3S13 10.794 13 12zM8 11c.806 0 .988.55 1 1h2c0-1.206-.799-3-3-3s-3 1.794-3 3l2 .012C7.012 11.55 7.194 11 8 11z" />
                        </svg>
                    </article>
                </div>
            </article>
        </div>
    </section>
</div>
