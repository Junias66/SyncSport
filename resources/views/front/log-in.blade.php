<!DOCTYPE html>
<html lang="en">
<head>
    <title>SYNCSPORT</title>
    <link rel="stylesheet" href="{{ asset('storage/frontend/assets/css/index.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
 
   </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>SyncSport</h2>
            <div class="text-item">
                <h2>BIENVENUE! <br><span>
                </span></h2>
                <p>Rejoignez notre communauté dès maintenant pour accéder à des offres exclusives et ne rien manquer de nos nouveautés ! Connectez-vous ou inscrivez-vous en quelques instants.</p>
            </div>
        </div>
        <div class="login-section">

            <!--<div class="form-box register">
                <form action="#" method="POST">

                    <h2>INSCRIPTION</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="name" id="name" required>
                        <label >Nom complet</label>
                        <span class="error-message" id="name-error"></span>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" id="email" required>
                        <label >Email</label>
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-phone'></i></span>
                        <input type="number" name="phone" id="phone" required>
                        <label >Numéro de Téléphone</label>
                        <span class="error-message" id="phone-error"></span>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" id="password" required>
                        <label>Mot de Passe</label>
                        <span class="error-message" id="password-error"></span>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                        <label>Confirmer le mot de Passe</label>
                        <span class="error-message" id="confirm_password-error"></span>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statment</label>
                    </div>
                    <button class="btn" type="submit">S'inscrire</button><br>
                    <div class="create-account">
                        <p>Avez-vous déja un compte? <a href="#" class="login-link">Se Connecter</a></p>
                    </div>
                </form>
            </div>-->
            <div class="form-box login">
                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('logine') }}" method="POST">
                @csrf
                    <h2>Se Connecter</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Mot de Passe</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Mot de passe oublé</a>
                    </div>
                    @if ($errors->has('erreur'))
                        <div style="color: rgb(230, 0, 0);">
                            {{ $errors->first('erreur') }}
                        </div>
                    @endif
                    <button class="btn" type="submit">Se connecter</button>
                    <div class="create-account">
                        <p>Créer un compte? <a href="{{ route('sign-in') }}" class="register-link">S'inscrire</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- SIGN UP FORM CREATION -->

    <!--<script src=""></script>-->
    
</body>

</html>
