@extends('layouts.base')
@section('title', 'Logout')
@section('content')
<div id="logout" v-cloak>
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <div class="logout-content">
                <span class="logout-message">¿SEGURO DESEA CERRAR SESIÓN?</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mb-50px">
            <div class="logout-actions">
                <button type="submit" class="btn btn-primary" @click.prevent="logout">Aceptar</button>
                <button type="submit" class="btn btn-primary" @click.prevent="back">Volver al inicio</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('vue')
<script type="text/javascript">
    (function() {
        new Vue({
            el: '#logout',
            methods: {
                back: back,
                logout: logout
            }
        })

        /**
         * Back to home
         */
        function back() {
            window.location.href = '/';
        }

        /**
         * Empty the data stored in local
         */
        function logout() {
            localStorage.removeItem('token');
            localStorage.removeItem('userData');
            localStorage.removeItem('refreshToken');

            window.location.href = '/login';
        }
    })();
</script>
@endsection