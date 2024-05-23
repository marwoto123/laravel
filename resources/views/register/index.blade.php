@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">

            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center"> Registrasi</h1>
                <form action="/register" method="post">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                    <div class="form-floating">
                        <input type="text" name="name"class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name"  required value="{{ old('name')}}">
                        <label for="name"> Nama</label>
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username"class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username')}}">
                        <label for="username"> username</label>
                        @error('username')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    </div>

                    <div class="form-floating">
                        <input type="email"name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>


                    <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>

                </form>

                <small class="d-block text-center mt-3">not register <a href="/register">register</a> </small>
            </main>
        </div>
    </div>
@endsection
