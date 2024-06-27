<x-public-layout>
    <x-slot name="title">
        Youssef Selk
    </x-slot>
    <div class="container mx-auto mt-16 w-full">
        <h1 class="text-4xl md:text-6xl font-bold text-orange-300 mb-2 md:mb-4">Hello!</h1>
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-2 md:mb-4">I'm Youssef Selk</h2>
        <p class="text-lg md:text-xl text-orange-300 mb-6 md:mb-8">Full-Stack Developer passionate about creating robust
            web applications.</p>
        <div class="mt-4 md:mt-8">
            <a href="https://your-portfolio-url.com" class="text-blue-500 hover:underline">Portfolio</a>
            <span class="mx-2 text-gray-400">|</span>
            <a href="#" class="text-blue-500 hover:underline">GitHub</a>
            <span class="mx-2 text-gray-400">|</span>
            <a href="#" class="text-blue-500 hover:underline">LinkedIn</a>
        </div>
    </div>
    <div class="py-20 container mx-auto">
        <h2 class="text-2xl md:text-4xl font-bold text-orange-300 mb-6">Personal Information</h2>
        <div class="flex flex-col md:flex-row justify-around items-center">
            <div class=" px-4 mb-8 md:mb-0 md:ml-16">
                <img src="{{ asset('img/logo.jpg') }}" alt="Youssef Selk" class="w-[300px] rounded-lg shadow-lg">
            </div>
            <div class="px-4">

                <ul class="list-disc pl-4 text-lg">

                    <li class="flex items-center mb-4">
                        <i class="fas fa-user mr-4 text-orange-300"></i>
                        <span class="font-bold">Name:</span> Youssef Selk
                    </li>
                    <li class="flex items-center mb-4">
                        <i class="fas fa-birthday-cake mr-4 text-orange-300"></i>
                        <span class="font-bold">Date of Birth:</span> Feb 22, 2003
                    </li>
                    <li class="flex items-center mb-4">
                        <i class="fas fa-map-marker-alt mr-4 text-orange-300"></i>
                        <span class="font-bold">Address:</span> ******
                    </li>
                    <li class="flex items-center mb-4">
                        <i class="fas fa-envelope mr-4 text-orange-300"></i>
                        <span class="font-bold">Email:</span> youssefselk.dev@gmail.com
                    </li>
                    <li class="flex items-center mb-4">
                        <i class="fas fa-phone-alt mr-4 text-orange-300"></i>
                        <span class="font-bold">Phone:</span> ******
                    </li>
                </ul>
                <p class="mt-6 text-lg">14 Projects complete</p>
            </div>
        </div>

    </div>
    <div class="bg-black py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-300 mb-6">Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
                <!-- Service Card 1 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">Web Development</h3>
                    </div>
                    <p class="text-gray-200">Custom web application development using modern technologies.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">Frontend Design</h3>
                    </div>
                    <p class="text-gray-200">Responsive and user-friendly interface design.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">Backend Development</h3>
                    </div>
                    <p class="text-gray-200">Building robust APIs and server-side applications.</p>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">Database Management</h3>
                    </div>
                    <p class="text-gray-200">Efficient data storage and retrieval solutions.</p>
                </div>

                <!-- Service Card 5 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">E-commerce Solutions</h3>
                    </div>
                    <p class="text-gray-200">Setting up online stores with secure payment gateways.</p>
                </div>

                <!-- Service Card 6 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 mr-3 text-orange-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        <h3 class="text-xl font-semibold ">Technical Consulting</h3>
                    </div>
                    <p class="text-gray-200">Guidance and advice on IT solutions and architecture.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-300 mb-6">My Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Skill Card: Web Development -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-code text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Web Development</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 85%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Custom web application development using modern technologies.
                        </p>
                    </div>
                </div>

                <!-- Skill Card: Frontend Design -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-paint-brush text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Frontend Design</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 75%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Responsive and user-friendly interface design.</p>
                    </div>
                </div>

                <!-- Skill Card: Backend Development -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-server text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Backend Development</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width:90%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Building robust APIs and server-side applications.</p>
                    </div>
                </div>

                <!-- Skill Card: HTML -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-html5 text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">HTML</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 100%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Semantic markup for web content.</p>
                    </div>
                </div>

                <!-- Skill Card: CSS -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-css3-alt text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">CSS</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 85%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Styling and layout for web pages.</p>
                    </div>
                </div>

                <!-- Skill Card: JavaScript -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-js text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">JavaScript</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 85%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Interactive and dynamic web functionality.</p>
                    </div>
                </div>

                <!-- Skill Card: AJAX -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-sync-alt text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">AJAX</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 70%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Asynchronous data handling in web applications.</p>
                    </div>
                </div>

                <!-- Skill Card: jQuery -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-js-square text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">jQuery</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width:60%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">DOM manipulation and event handling.</p>
                    </div>
                </div>

                <!-- Skill Card: PHP -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-php text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">PHP</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 80%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Server-side scripting and web development.</p>
                    </div>
                </div>

                <!-- Skill Card: Laravel -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-laravel text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Laravel</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 85%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">PHP framework for efficient web development.</p>
                    </div>
                </div>

                <!-- Skill Card: Tailwind CSS -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-css3-alt text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Tailwind CSS</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 95%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Utility-first CSS framework for rapid UI development.</p>
                    </div>
                </div>

                <!-- Skill Card: Bootstrap -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-bootstrap text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Bootstrap</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 80%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Frontend framework for responsive web design.</p>
                    </div>
                </div>

                <!-- Skill Card: SQL -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-database text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">SQL</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 90%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Database management and querying.</p>
                    </div>
                </div>

                <!-- Skill Card: Git -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <i class="fab fa-git-alt text-orange-300 mr-2"></i>
                            <h3 class="text-lg font-semibold text-white">Git</h3>
                        </div>
                        <div class="relative w-full bg-gray-600 rounded-full overflow-hidden h-2 mb-3">
                            <div class="absolute left-0 top-0 h-full bg-orange-300 rounded-full transition-all duration-500"
                                style="width: 75%;"></div>
                        </div>
                        <p class="text-sm text-gray-400">Version control and collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-300 mb-6">GitHub Projects</h2>
            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- GitHub projects will be dynamically added here -->
            </div>
        </div>
    </div>

    <div class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-orange-300 mb-6">Contact Me</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Email -->
                <div class="flex items-center bg-gray-800 rounded-lg p-4 shadow-lg">
                    <div class="flex-shrink-0 bg-orange-300 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a8 8 0 100 16 8 8 0 000-16zM6 10a1 1 0 112 0v2a1 1 0 11-2 0v-2zm8 0a1 1 0 00-2 0v2a1 1 0 102 0v-2zm-4-6a.5.5 0 00-1 0v3a.5.5 0 001 0V4zm3 .707V8.5a1.5 1.5 0 01-3 0v-3.793a3.001 3.001 0 112 0zM12 8.5a.5.5 0 011 0V4a.5.5 0 00-1 0v4.5zm-4 4.5a.5.5 0 100-1h4a.5.5 0 000 1h-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-orange-300">Email</div>
                        <div class="text-gray-300">youssefselk.dev@gmail.com</div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-center bg-gray-800 rounded-lg p-4 shadow-lg">
                    <div class="flex-shrink-0 bg-orange-300 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a1 1 0 00-1 1v10a1 1 0 001 1h4a1 1 0 001-1V5a1 1 0 00-1-1H8zm2 11a1 1 0 01-1 1H9a1 1 0 01-1-1V5a1 1 0 011-1h1a1 1 0 011 1v10z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-orange-300">Phone</div>
                        <div class="text-gray-300">***************</div>
                    </div>
                </div>

                <!-- LinkedIn -->
                <div class="flex items-center bg-gray-800 rounded-lg p-4 shadow-lg">
                    <div class="flex-shrink-0 bg-orange-300 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9.486 10.033V8.586c0-.354-.045-.794-.06-1.272h.06v-.405h-1.828v.405h.105c.025.444.034.896.034 1.272v1.447h-.033l-.001.001-1.453 4.344h1.93l.903-2.899c.211-.677.6-1.608 1.454-1.608.814 0 1.131.615 1.131 1.521v2.986h1.905v-3.208c0-2.13-1.132-3.134-2.646-3.134-1.239 0-1.798.661-2.108 1.124h.039V8.586c0-.354-.016-.794-.06-1.272h2.077l.002.001v-.405h-2.641v.405h.119c.309.903.773 2.094 2.166 2.094 1.281 0 1.712-.969 1.712-2.374v-3.184H12.48V8.79c0 .001-.032.098-.069.216l-.331 1.065h-.017v2.017h-.002V14h3.315c.033-.415.045-.906.045-1.474 0-3.487-2.305-5.958-5.393-5.958C5.62 6.568 4 8.536 4 11.893c0 2.304 1.796 3.979 4.298 3.979 2.598 0 4.15-1.682 4.15-4.11v-.935h-.002z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-orange-300">LinkedIn</div>
                        <div class="text-gray-300">
                            <a href="https://www.linkedin.com/in/youssef-selk-0b7211248/">LinkedIn Profile</a>
                        </div>
                    </div>
                </div>

                <!-- GitHub -->
                <div class="flex items-center bg-gray-800 rounded-lg p-4 shadow-lg">
                    <div class="flex-shrink-0 bg-orange-300 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.419 2.865 8.17 6.839 9.493.5.093.682-.217.682-.48 0-.237-.009-.866-.014-1.7-2.782.604-3.37-1.34-3.37-1.34-.455-1.155-1.112-1.464-1.112-1.464-.908-.619.069-.606.069-.606 1.004.071 1.53 1.032 1.53 1.032.891 1.527 2.34 1.087 2.912.832.092-.645.35-1.086.637-1.336-2.227-.257-4.566-1.114-4.566-4.954 0-1.095.39-1.988 1.032-2.687-.103-.258-.448-1.274.099-2.655 0 0 .843-.27 2.755 1.03A9.56 9.56 0 0110 5.43c.855.002 1.717.115 2.524.34 1.912-1.3 2.754-1.03 2.754-1.03.548 1.381.203 2.397.1 2.655.643.699 1.03 1.592 1.03 2.687 0 3.849-2.342 4.695-4.574 4.948.36.31.681.922.681 1.857 0 1.342-.012 2.421-.012 2.752 0 .267.18.576.688.478C17.138 18.167 20 14.417 20 10c0-5.523-4.477-10-10-10z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-orange-300">GitHub</div>
                        <div class="text-gray-300">
                            <a href="https://github.com/YoussefSelk">GitHub Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-public-layout>

<script src="{{ asset('js/FrontOffice/Home/home.js') }}" type="module"></script>
