@extends('layouts.auth')
@section('content')
    <div class="login-card anim anim-1" @if($errors->has('username')) data-login-error="{{ $errors->first('username') }}" @endif>
        <!-- Divider label -->
        <div class="auth-divider">
            <span>User Authentication</span>
        </div>

        <!-- Form -->
        <form id="loginForm" action="{{ route('login') }}" method="POST" autocomplete="off" class="anim anim-2">
            @csrf
            <!-- Username -->
            <div class="field-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-input" placeholder="Enter your username" value="{{ old('username') }}" />
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
