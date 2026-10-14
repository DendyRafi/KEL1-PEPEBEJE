<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">

    <main class="relative isolate flex min-h-dvh w-full flex-col overflow-hidden bg-white lg:flex-row">
        <!-- Background Image (Fokus pas seperti di Figma) -->
        <img
            src="https://api.builder.io/api/v1/image/assets/TEMP/181e03f2a5d2c4f4731f84960a3cc82d52cb538e?width=2466"
            alt="Background"
            class="absolute inset-y-0 left-0 -z-30 h-full w-full object-cover object-[15%_bottom] lg:w-[60%]"
        />

        <!-- Overlay Gradients (Disesuaikan agar tidak menutupi gambar secara berlebihan) -->
        <div class="absolute inset-0 -z-20 bg-[linear-gradient(215deg,rgba(255,255,255,0.4)_0%,rgba(155,192,218,0)_60%)] lg:right-auto lg:w-[50%]"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(192deg,#B0CBE6_28%,#1E3156_78%)] opacity-90 lg:hidden"></div>
        <div class="absolute -right-[30%] -top-[55%] -z-10 hidden h-[210%] w-[85%] rounded-[50%] bg-[linear-gradient(192deg,#B0CBE6_28%,#1E3156_78%)] lg:block"></div>

        <!-- Form Container -->
        <div class="flex flex-1 flex-col items-center justify-center gap-6 px-4 py-10 lg:ml-[55%] lg:w-[45%] lg:flex-none lg:px-6">
            <h1 class="relative text-[clamp(64px,12vw,128px)] leading-none text-[#B3E0FF] [text-shadow:0_4px_4px_rgba(0,0,0,0.25)]">
                Login
            </h1>

            <form
                action="{{ route('login') }}"
                method="POST"
                class="flex w-full max-w-[564px] flex-col items-center gap-[31px] rounded-[37px] bg-[#B0CBE6] px-6 pb-12 pt-[50px] shadow-[0_10px_4px_0_rgba(0,0,0,0.25)] sm:px-[72px] sm:pb-[72px]"
            >
                @csrf

                <h2 class="text-center text-[28px] font-normal text-[#6B4FDE] sm:text-[32px]">
                    Log In To Continue
                </h2>

                <!-- Input NIP / Email -->
                <label class="flex h-[66px] w-full max-w-[419px] items-center gap-2.5 rounded-full bg-white px-[23px] focus-within:ring-2 focus-within:ring-[#6B4FDE]">
                    <svg
                        class="shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            d="M9.175 10.825C8.39167 10.0417 8 9.1 8 8C8 6.9 8.39167 5.95833 9.175 5.175C9.95833 4.39167 10.9 4 12 4C13.1 4 14.0417 4.39167 14.825 5.175C15.6083 5.95833 16 6.9 16 8C16 9.1 15.6083 10.0417 14.825 10.825C14.0417 11.6083 13.1 12 12 12C10.9 12 9.95833 11.6083 9.175 10.825ZM4 20V17.2C4 16.6333 4.146 16.1127 4.438 15.638C4.73 15.1633 5.11733 14.8007 5.6 14.55C6.63333 14.0333 7.68333 13.646 8.75 13.388C9.81667 13.13 10.9 13.0007 12 13C13.1 12.9993 14.1833 13.1287 15.25 13.388C16.3167 13.6473 17.3667 14.0347 18.4 14.55C18.8833 14.8 19.271 15.1627 19.563 15.638C19.855 16.1133 20.0007 16.634 20 17.2V20H4Z"
                            fill="#9747FF"
                        />
                    </svg>
                    <span class="sr-only">NIP / Email</span>
                    <input
                        name="identifier"
                        type="text"
                        autocomplete="username"
                        placeholder="NIP / Email"
                        value="{{ old('identifier') }}"
                        required
                        class="min-w-0 flex-1 bg-transparent text-xl text-[#6B4FDE] outline-none placeholder:text-[#6B4FDE] sm:text-2xl"
                    />
                </label>

                <!-- Input Password -->
                <label class="flex h-[66px] w-full max-w-[419px] items-center gap-2.5 rounded-full bg-white px-[23px] focus-within:ring-2 focus-within:ring-[#6B4FDE]">
                    <svg
                        class="shrink-0"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            d="M6 22C5.45 22 4.97933 21.8043 4.588 21.413C4.19667 21.0217 4.00067 20.5507 4 20V10C4 9.45 4.196 8.97933 4.588 8.588C4.98 8.19667 5.45067 8.00067 6 8H7V6C7 4.61667 7.48767 3.43767 8.463 2.463C9.43833 1.48833 10.6173 1.00067 12 1C13.3827 0.999334 14.562 1.487 15.538 2.463C16.514 3.439 17.0013 4.618 17 6V8H18C18.55 8 19.021 8.196 19.413 8.588C19.805 8.98 20.0007 9.45067 20 10V20C20 20.55 19.8043 21.021 19.413 21.413C19.0217 21.805 18.5507 22.0007 18 22H6ZM13.413 16.413C13.8043 16.021 14 15.55 14 15C14 14.45 13.8043 13.9793 13.413 13.588C13.0217 13.1967 12.5507 13.0007 12 13C11.4493 12.9993 10.9787 13.1953 10.588 13.588C10.1973 13.9807 10.0013 14.4513 10 15C9.99867 15.5487 10.1947 16.0197 10.588 16.413C10.9813 16.8063 11.452 17.002 12 17C12.548 16.998 13.019 16.8023 13.413 16.413ZM9 8H15V6C15 5.16667 14.7083 4.45833 14.125 3.875C13.5417 3.29167 12.8333 3 12 3C11.1667 3 10.4583 3.29167 9.875 3.875C9.29167 4.45833 9 5.16667 9 6V8Z"
                            fill="#9747FF"
                        />
                    </svg>
                    <span class="sr-only">Password</span>
                    <input
                        name="password"
                        type="password"
                        autocomplete="current-password"
                        placeholder="Password"
                        required
                        class="min-w-0 flex-1 bg-transparent text-xl text-[#6B4FDE] outline-none placeholder:text-[#6B4FDE] sm:text-2xl"
                    />
                </label>

                <!-- Tombol Submit -->
                <button
                    type="submit"
                    class="flex h-[43px] w-[135px] items-center justify-center rounded-[20px] bg-[#6B4FDE] text-xl text-white transition-opacity hover:opacity-90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                >
                    Login
                </button>

                 <a
                href="{{ url('/register') }}"
                class="text-[15px] text-[#6B4FDE] underline underline-offset-2 hover:opacity-80 lg:text-[#B0CBE6]"
            >
                Belum punya akun?
            </a>
            </form>
        </div>
    </main>

</body>
</html>