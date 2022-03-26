<div>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
            <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                Join us Now
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
                Enter your credentials to get access account
            </div>

            <div class="mt-10">
                <div class="flex justify-center text-green-500 mb-5">
                    @if (session()->has('registerSuccessMessage'))
                    <div>
                        {{ session('registerSuccessMessage') }}
                    </div>
                    @endif
                </div>
                <form wire:submit.prevent="register">
                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input id="name" type="text" wire:model="name" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Enter your name"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('name') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>

                            <input id="email" type="email" wire:model="email" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Enter your email"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('email') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>

                            <input id="password" type="password" wire:model="password" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Enter your password"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('password') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>

                            <input id="password_confirmation" type="password" wire:model="passwordConfirmation" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="confirm your password"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('passwordConfirmation') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input id="address" type="text" wire:model="address" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Enter your address"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('address') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input id="mobile_number" type="text" wire:model="mobileNumber" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Enter your mobile number"/>
                        </div>
                        <span class="error text-xs text-red-500">
                            @error('mobileNumber') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="flex flex-col mb-5 max-h-10">
                        <div class="relative">
                            <select wire:model="medicalCenter" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option selected value="">Choose a Medical Center</option>
                                @foreach ($medicalCenters as $medicalCenter)
                                    <option>{{ $medicalCenter->name }}</option>
                                @endforeach
                            </select>
                            <span class="error text-xs text-red-500">
                                @error('medicalCenter') {{ $message }} @enderror
                            </span>
                        </div>
                    </div>

                    <div class="flex w-full">
                        <button type="submit" class="flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Sign Up</span>
                            <span>
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" >
                                    <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a href="#" target="_blank" class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                <span class="ml-2">
                    You have an account?
                    <a href="{{ route('login.index') }}" class="text-xs ml-2 text-blue-500 font-semibold">
                        Login here
                    </a>
                </span>
            </a>
        </div>
    </div>
</div>
