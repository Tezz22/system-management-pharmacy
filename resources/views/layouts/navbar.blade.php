<!-- ================= NAVBAR APOTEK ================= -->
<nav class="bg-green-600 shadow-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- FLEX CONTAINER -->
        <div class="flex h-16 items-center justify-between">

            <!-- ================= LEFT SECTION ================= -->
            <div class="flex items-center">

                <!-- LOGO -->
                <img class="size-9"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg"
                        alt="Logo">

                <!-- APP NAME -->
                <span class="ml-3 text-white text-lg font-semibold tracking-wide">
                    Apotek App
                </span>

                <!-- MENU DESKTOP -->
                <div class="hidden md:block ml-10">
                    <div class="flex space-x-2">

                        <!-- MENU ACTIVE -->
                        <a href="#"
                            class="rounded-md bg-green-700 px-4 py-2
                                    text-base font-medium text-white
                                    transition active:scale-95">
                            Dashboard
                        </a>

                        <!-- MENU -->
                        <a href="#"
                            class="rounded-md px-4 py-2
                                    text-base font-medium text-white/90
                                    hover:bg-green-700 hover:text-white
                                    transition active:scale-95">
                            Obat
                        </a>

                        <a href="#"
                            class="rounded-md px-4 py-2
                                    text-base font-medium text-white/90
                                    hover:bg-green-700 hover:text-white
                                    transition active:scale-95">
                            Laporan
                        </a>
                    </div>
                </div>
            </div>

            <!-- ================= RIGHT SECTION ================= -->
            <div class="hidden md:flex items-center space-x-3">

                <!-- NOTIFICATION BUTTON -->
                <button
                    class="relative rounded-full p-2
                            text-white
                            hover:bg-green-700
                            focus:outline-none focus:ring-2 focus:ring-white/60
                            transition active:scale-90">

                    <!-- ICON BELL (SVG = PROFESIONAL) -->
                    <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor"
                            class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9a6 6 0 1 0-12 0v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0Z"/>
                    </svg>

                    <!-- BADGE NOTIF -->
                    <span class="absolute -top-1 -right-1
                                    bg-red-500 text-white
                                    text-xs font-bold
                                    px-1.5 rounded-full">
                        3
                    </span>
                </button>

                <!-- ================= PROFILE DROPDOWN ================= -->
                <el-dropdown class="relative">

                    <!-- AVATAR BUTTON -->
                    <button
                        class="flex items-center rounded-full
                                focus:outline-none focus:ring-2 focus:ring-white/60
                                transition active:scale-95">
                        <img
                            class="size-9 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e"
                            alt="User">
                    </button>

                    <!-- DROPDOWN MENU -->
                    <el-menu
                        anchor="bottom end"
                        class="mt-2 w-56 origin-top-right
                                rounded-xl bg-white
                                border border-gray-100
                                shadow-xl
                                transition
                                data-closed:scale-95
                                data-closed:opacity-0">

                        <a
                            class="block px-4 py-3
                                    text-base font-medium text-gray-700
                                    hover:bg-gray-100 transition">
                            👤 Profile
                        </a>

                        <a
                            class="block px-4 py-3
                                    text-base font-medium text-gray-700
                                    hover:bg-gray-100 transition">
                            ⚙️ Settings
                        </a>

                        <a
                            class="block px-4 py-3
                                    text-base font-medium text-red-600
                                    hover:bg-red-50 transition">
                            🚪 Logout
                        </a>
                    </el-menu>
                </el-dropdown>
            </div>

        </div>
    </div>
</nav>
<!-- ================= END NAVBAR ================= -->
