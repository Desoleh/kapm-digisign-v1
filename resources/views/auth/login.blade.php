<x-guest-layout>
    <style>
        #spinner {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div
        class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none dark:bg-gray-950 rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0">
            <h3 class="relative text-transparent bg-clip-text bg-gradient-to-tl from-blue-600 to-cyan-400 z-1 ">
                Welcome Back</h3>
            <p class="mb-0">Enter your email and password to sign in</p>
        </div>

        <div class="flex-auto p-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="inline-block mb-2 ml-1 font-bold text-slate-700 text-xs">Email</label>
                <div class="mb-4">
                    <input type="email" placeholder="Email"
                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <label class="inline-block mb-2 ml-1 font-bold text-slate-700 text-xs">Password</label>
                <div class="mb-4">
                    <input type="password" placeholder="Password"
                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                        type="password" name="password" required autocomplete="current-password" />
                </div>
                <div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Remember Me -->
                <div class="flex justify-between">
        
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
        
                        <div id="spinner" style="display:none;" class="">
                            <i class="fas fa-spinner fa-spin"></i> Loading...
                        </div>
                    </div>
                </div>
        
                <div class="text-center">
                    <button type="submit" id="myButton"
                        class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Sign
                        In</button>
                </div>
                <div class="text-center">
                    <a href="/auth/google/redirect"
                        class="inline-block w-full px-6 py-3 mt-3 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="">
                        <span>LOG IN WITH GOOGLE</span>
                    </a>
                </div>
        
                <div class="text-center">
                    <a href="/auth/azure/redirect"
                        class="inline-block w-full px-6 py-3 mt-3 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                            <path fill="#ff5722" d="M6 6H22V22H6z" transform="rotate(-180 14 14)"></path>
                            <path fill="#4caf50" d="M26 6H42V22H26z" transform="rotate(-180 34 14)"></path>
                            <path fill="#ffc107" d="M26 26H42V42H26z" transform="rotate(-180 34 34)"></path>
                            <path fill="#03a9f4" d="M6 26H22V42H6z" transform="rotate(-180 14 34)"></path>
                        </svg>
                        <span>LOG IN WITH MICROSOFT</span>
                    </a>
        
                </div>
        
        
            </form>
        </div>
    </div>
    <script>
        document.getElementById('myButton').addEventListener('click', function () {
            document.getElementById('spinner').style.display = 'block';
    
            // Perform your actions or submit the form here
            // For example, you can make an AJAX request or submit a form
            // After completing the action, you can hide the spinner again
            // For demonstration purposes, let's use a setTimeout to simulate an action
            setTimeout(function () {
                document.getElementById('spinner').style.display = 'none';
            }, 2000); // Simulating a 2-second action
        });
    </script>
</x-guest-layout>