@extends('layouts/main')
@section('title', 'Tiny Form')
@section('main_container')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="/register" method="POST" class="shadow border p-3 rounded">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <h2 class="fw-light">Formulario</h2>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_name" name="complete_name" placeholder="Nombre completo" required>
                        <label for="complete_name">Nombre completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                        <label for="email">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="form-floating mb-3 mt-4 text-center">
                        <button type="submit" class="btn btn-warning">Registrar</button>
                    </div>
                </form>
            </div>
        </div>