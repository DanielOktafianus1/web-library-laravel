<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/tamplete/dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/tamplete/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/tamplete/dist/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/tamplete/dist/assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-7 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('/tamplete/dist/assets/images/logo/logo.png') }}"
                                alt="Logo"></a>
                    </div>


                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    @if (session('loginFailed'))
                        <p class="alert alert-danger text-center">{{ session('loginFailed') }}</p>
                        <br>
                    @endif
                    <form action="{{ route('loginAction') }}" method="POST">
                        @csrf

                        {{-- Email --}}
                        <i class="text-danger" id="errorEmail"></i>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email"
                                name="email" value="{{ old('email') }}" required id="inputEmail">

                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        {{-- Password --}}
                        <i class="text-danger" id="errorPassword"></i>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password"
                                name="password" required id="inputPassword">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"
                            id="btnLogin">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById('inputEmail').addEventListener('input', emailValidation)
        document.getElementById('inputPassword').addEventListener('input', passwordValidation)

        // Email validation
        function emailValidation() {

            let isValid = true;

            const email = document.getElementById('inputEmail').value;
            const errorEmail = document.getElementById('errorEmail');
            errorEmail.textContent = '';
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (!email) {
                errorEmail.textContent = 'Email must be filled in!';
                isValid = false;
            } else if (!emailPattern.test(email)) {
                errorEmail.textContent = 'Invalid email!';
                isValid = false;
            }

            const btnSubmit = document.getElementById('btnLogin');

            if (isValid == true) {
                btnSubmit.disabled = false;
            } else {
                btnSubmit.disabled = true;
            }
        }

        // Password validation
        function passwordValidation() {

            let isValid = true;

            const password = document.getElementById('inputPassword').value;
            const errorPassword = document.getElementById('errorPassword');
            errorPassword.textContent = '';

            if (!password) {
                errorPassword.textContent = 'Password must be filled in!';
                isValid = false;
            } else if (password.length < 8) {
                errorPassword.textContent = 'The password must have a minimum of 7 characters!';
                isValid = false;

                const btnSubmit = document.getElementById('btnLogin');

                if (isValid == true) {
                    btnSubmit.disabled = false;
                } else {
                    btnSubmit.disabled = true;
                }
            }
        }
    </script>
</body>

</html>
