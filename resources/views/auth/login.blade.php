@extends('layout.auth_template')

@section('page-title', 'Login')

@section('content')
    <!--Header-->
    <div class="mt-8 text-center">
        <h4 class="mb-1 text-custom-500 dark:text-custom-500">Welcome Back !</h4>
        <p class="text-slate-500 dark:text-zink-200">Sign in to continue to FIC11.</p>
    </div>

    <!--Form-->
    <form action="{{ route('login') }}" method="POST" class="mt-10" id="signInForm">
        @csrf
        <!--Notification-->
        <div class="hidden px-4 py-3 mb-3 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50"
            id="successAlert">
            You have <b>successfully</b> signed in.
        </div>

        <!--Email-->
        <div class="mb-3">
            <label for="email" class="inline-block mb-2 text-base font-medium">Email</label>
            <input type="text" id="email" name="email"
                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Enter email">
            <div id="email-error" class="hidden mt-1 text-sm text-red-500">Please enter a valid email address.</div>
        </div>

        <!--Password-->
        <div class="mb-3">
            <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
            <input type="password" id="password" name="password"
                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="Enter password">
            <div id="password-error" class="hidden mt-1 text-sm text-red-500">Password must be at least 8 characters long
                and contain both letters and numbers.</div>
        </div>

        <!--Button-->
        <div class="mt-10">
            <button type="submit"
                class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                Sign In
            </button>
        </div>

        <!--Link Register-->
        <div class="mt-10 text-center">
            <p class="mb-0 text-slate-500 dark:text-zink-200">Don't have an account ?
                <a href="{{ route('register') }}"
                    class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                    SignUp
                </a>
            </p>
        </div>
    </form>
@endsection


@push('customJs')
    <script src="assets/js/pages/auth-login.init.js"></script>
@endpush
