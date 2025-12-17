<x-auth-layout>
    <x-slot:title>
        Register Page
    </x-slot:title>
    <section class="h-screen">
        <div class="container h-full px-6 py-24 mx-auto">
            <div class="flex h-full flex-wrap items-center justify-center lg:justify-between ">
                <!-- Left column container with background-->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12">
                    <img src="{{ asset('images/undraw_writing-online_x665.svg') }}" class="w-full" alt="Phone image" />
                </div>

                <!-- Right column container with form -->
                <div class="md:w-8/12 lg:ms-6 lg:w-5/12">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <!-- Name input -->
                        <div class="relative mb-6 flex flex-col gap-2" data-twe-input-wrapper-init>
                            <label for="name">
                                Name
                            </label>
                            <input type="text" class="min-h-auto border w-full rounded px-3 py-[0.32rem]"
                                name="name" id="name" value="{{ old('name') }}" />
                            @error('name')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="relative mb-6 flex flex-col gap-2" data-twe-input-wrapper-init>
                            <label for="email">
                                Email
                            </label>
                            <input type="email" class="min-h-auto border w-full rounded px-3 py-[0.32rem]"
                                id="email" name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="relative mb-6 flex flex-col gap-2" data-twe-input-wrapper-init>
                            <label for="password">
                                Password
                            </label>
                            <input type="password" class="min-h-auto border w-full rounded px-3 py-[0.32rem]"
                                id="password" name="password" />
                            @error('password')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password confirm input -->
                        <div class="relative mb-6 flex flex-col gap-2" data-twe-input-wrapper-init>
                            <label for="password_confirmation">
                                Password Confirmation
                            </label>
                            <input type="password" class="min-h-auto border w-full rounded px-3 py-[0.32rem]"
                                id="password_confirmation" name="password_confirmation" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="inline-block mt-2 w-full rounded bg-teal-600 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-teal-700  focus:bg-teal-300  focus:outline-none focus:ring-0 active:bg-teal-600"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Sign up
                        </button>

                        <!-- Divider -->
                        <div
                            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300 dark:before:border-neutral-500 dark:after:border-neutral-500">
                            <p class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
                                OR
                            </p>
                        </div>

                        <a type="submit" href="{{ route('auth.login') }}"
                            class="inline-block text-center mt-2 w-full rounded bg-teal-600 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-teal-700  focus:bg-teal-300  focus:outline-none focus:ring-0 active:bg-teal-600"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Login
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-auth-layout>
