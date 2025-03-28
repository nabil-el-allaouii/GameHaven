<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHaven - Browse Games</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#4F46E5"
        data-border-radius='small'></script>
</head>

<body class="bg-gray-900 text-white min-h-screen">
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                            alt="Logo">
                    </div>
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#"
                            class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Browse</a>
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Library</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-center">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-gray-600 focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Search games...">
                        </div>
                    </div>
                </div>
                <div class="ml-4 flex items-center md:ml-6">
                    <button
                        class="!rounded-button bg-custom hover:bg-custom/90 text-white px-4 py-2 text-sm font-medium">Sign
                        In</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-64 flex-shrink-0">
                <div class="bg-gray-800 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-medium mb-4">Platforms</h3>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3"><i class="fab fa-playstation mr-2"></i>PlayStation</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3"><i class="fab fa-xbox mr-2"></i>Xbox</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3"><i class="fas fa-desktop mr-2"></i>PC</span>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-medium mb-4">Genres</h3>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Action</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Adventure</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">RPG</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Strategy</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Sports</span>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-medium mb-4">Features</h3>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Multiplayer</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Single Player</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox"
                                class="form-checkbox text-custom rounded border-gray-600 bg-gray-700">
                            <span class="ml-3">Controller Support</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex-1">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                    <h2 class="text-2xl font-bold mb-4 sm:mb-0">All Games</h2>
                    <select class="form-select bg-gray-700 border-gray-600 text-white rounded-md">
                        <option>Most Popular</option>
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A stunning 3D rendered video game cover art featuring a futuristic cyberpunk city with neon lights and a mysterious figure in the foreground, professional quality game artwork style&width=600&height=400&orientation=portrait&flag=a6c084d8-6bf5-40ca-9a0d-d04512340b22"
                            class="w-full h-48 object-cover" alt="Cyber Edge 2077">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-medium">Cyber Edge 2077</h3>
                                <div class="flex space-x-2">
                                    <i class="fab fa-playstation text-gray-400"></i>
                                    <i class="fab fa-xbox text-gray-400"></i>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1">4.8</span>
                                </div>
                                <span class="mx-2 text-gray-500">•</span>
                                <span class="text-gray-400">Action RPG</span>
                            </div>
                            <div class="text-xl font-bold">$59.99</div>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A majestic fantasy game cover art showing an ancient dragon perched on a medieval castle tower under a dramatic stormy sky, professional quality game artwork style&width=600&height=400&orientation=portrait&flag=4da8d78b-438e-468d-b82c-a796cf8cd877"
                            class="w-full h-48 object-cover" alt="Dragon Legacy">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-medium">Dragon Legacy</h3>
                                <div class="flex space-x-2">
                                    <i class="fab fa-playstation text-gray-400"></i>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1">4.9</span>
                                </div>
                                <span class="mx-2 text-gray-500">•</span>
                                <span class="text-gray-400">Fantasy RPG</span>
                            </div>
                            <div class="text-xl font-bold">$49.99</div>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A high-speed racing game cover art showing a sleek futuristic sports car on a neon-lit track with motion blur effects, professional quality game artwork style&width=600&height=400&orientation=portrait&flag=8bf0413c-227e-45fb-93f9-9411e91b616d"
                            class="w-full h-48 object-cover" alt="Velocity X">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-medium">Velocity X</h3>
                                <div class="flex space-x-2">
                                    <i class="fab fa-xbox text-gray-400"></i>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1">4.7</span>
                                </div>
                                <span class="mx-2 text-gray-500">•</span>
                                <span class="text-gray-400">Racing</span>
                            </div>
                            <div class="text-xl font-bold">$39.99</div>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A post-apocalyptic game cover art showing a wasteland survivor overlooking a ruined city with dramatic lighting and atmospheric effects, professional quality game artwork style&width=600&height=400&orientation=portrait&flag=f738be7a-23e0-47eb-8b21-f72e98544bfa"
                            class="w-full h-48 object-cover" alt="Wasteland Chronicles">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-medium">Wasteland Chronicles</h3>
                                <div class="flex space-x-2">
                                    <i class="fab fa-playstation text-gray-400"></i>
                                    <i class="fab fa-xbox text-gray-400"></i>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1">4.6</span>
                                </div>
                                <span class="mx-2 text-gray-500">•</span>
                                <span class="text-gray-400">Survival</span>
                            </div>
                            <div class="text-xl font-bold">$44.99</div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button class="!rounded-button bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 font-medium">
                        <i class="fas fa-spinner mr-2"></i>
                        Load More Games
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 mt-12">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img class="h-8 w-auto mb-4" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                        alt="Logo">
                    <p class="text-gray-400 text-sm">Your ultimate destination for digital gaming entertainment.</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-discord text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">© 2024 GameHaven. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
