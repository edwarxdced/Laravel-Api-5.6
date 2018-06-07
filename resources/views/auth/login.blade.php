@extends('layouts.base')
@section('title', 'Login')
@section('content')
<div class="row mt-5" id="logout" style="margin-left: -190px; margin-right: -190px;">
    <div class="col-md-12 text-center mt-5 mb-50px">
        <form action="#" method="post" class="login" id="login" >
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <div class="form-login-avatar-wrapper">
                        <div class="form-login-avatar">
                            <img src="{{ asset('img/profile.png') }}" width="120" />
                        </div>
                    </div>
                <div class="form-wrapper text-left">
                    <table style="width: 100%; margin-top: 52px;">
                        <tr>
                            <td class="text-center"><img src="{{ asset('img/profile.png') }}" width="42" height="42" /></td>
                            <td><input type="text" placeholder="Usuario" v-model="data.username"/></td>
                        </tr>
                        <tr style="height: 30px;"></tr>
                        <tr>
                            <td class="text-center"><img src="{{ asset('img/password.png') }}" width="34" height="38" /></td>
                            <td><input type="password" placeholder="Contraseña" v-model="data.password"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right" class="forgot-password"><a href="{{ url('forgot-password') }}">¿Olvidaste tu contraseña?</a></td>
                        </tr>
                    </table>
                    <div class="row mt-5">
                        <div class="col-md-12 text-center ">
                            <button type="submit" class="btn btn-primary" @click.prevent="submitForm">Ingresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
@section('footer')
    <footer class="fixed-bottom text-center primary-color font-weight-bold">
        <span>COORDINADOR</span>
    </footer>
@endsection
@section('vue')
<script type="text/javascript">
    (function() {
        new Vue({
            el: '#login',
            data: {
                data: {
                    username: 'admin@novo.com',
                    password: '123456789'
                }
            },
            methods: {
                submitForm: submitForm
            }
        });

        function submitForm() {
            axios.post('/oauth/token', {
                grant_type: 'password',
                client_id: 2,
                client_secret: 'CMzyqy6BkTQ3dCLsfMcxbcSQ8j3uXieT3ogtiI3t',
                username: this.data.username,
                password: this.data.password
            }).then((e) => {
                if(e.data.access_token != undefined){
                    localStorage.setItem('token', e.data.token_type+" "+e.data.access_token);
                    localStorage.setItem('refreshToken', e.data.refresh_token);
                    window.location.href= "/";
                }

            }).catch((error) => {
                console.log(error);
            })
        }
    })();
</script>
@endsection