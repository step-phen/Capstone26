@extends('layouts.auth')
@section('content')
    <div class="login-card anim anim-1">
        <!-- Divider label -->
        <div class="auth-divider">
            <span>User Authentication</span>
        </div>

        <!-- Form -->
        <form id="loginForm" autocomplete="off" class="anim anim-2">
            <!-- Email -->
            <div class="field-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" />
            </div>

            <!-- Password -->
            <div class="field-group field-group--last">
                <label for="password" class="form-label">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" class="form-input form-input--pad-right"
                        placeholder="Enter your password" />
                    <button type="button" id="togglePassword" class="password-toggle">
                        <span id="iconOpen" class="material-symbols-outlined">visibility</span>
                        <span id="iconClosed" class="material-symbols-outlined" hidden>visibility_off</span>
                    </button>
                </div>
            </div>

            <!-- Action buttons -->
            <div class="form-actions">
                <button type="button" id="clearBtn" class="btn-clear">Clear
                    Entries</button>
                <button type="submit" id="loginBtn" class="btn-login">Login</button>
            </div>
        </form>
    </div>
@endsection
