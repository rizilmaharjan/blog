<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
    </head>
    <body class="antialiased bg-theme px-2 lg:px-8">
        <header class="container mx-auto">
            <x-container>
                <div class="flex items-center justify-between py-2  ">
                    <div class="flex items-center gap-4">
                        <a href="#" class="text-white block">Home</a>
                        <a href="#" class="text-white block">About</a>
                        <a href="#" class="text-white block">Contact</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="#" class="text-white block">

                            <x-icons.instagram class="w-4 h-4" />
                        </a>
                        <a href="#" class="text-white block">

                            <x-icons.facebook class="w-4 h-4" />
                        </a>
                        <a href="#" class="text-white block">

                            <x-icons.twitter class="w-4 h-4" />
                        </a>
                    </div>
                </div>
            </x-container>

        </header>
        <main>
            <div>

                <x-container class="bg-white">
                    <div class="py-8 border-b">

                        <div class="text-4xl text-center font-bold">CATALYST</div>
                    </div>

                    <div class="py-8">
                        <div class="grid grid-cols-4 gap-8">


                            <div class="col-span-3">
                               <x-article.grid title="The first article" />
                               <div class="grid grid-cols-2 gap-8 mt-8">
                                   <x-article.grid title="The first article" />
                                   <x-article.grid title="The first article" />
                                   <x-article.grid title="The first article" />
                                   <x-article.grid title="The first article" />
                                   <x-article.grid title="The first article" />
                                   <x-article.grid title="The first article" />

                               </div>
                               <div class="flex items-center justify-center mt-8">
                                <button class="bg-theme w-32 text-white px-4 py-2 rounded shadow-sm">previous</button>
                                <button class="bg-theme w-32 text-white px-4 py-2 ml-2 rounded shadow-sm">Next    </button>
                               </div>
                            </div>
                            <div class="col-span-1 space-y-8">
                                <x-sidebar-card title="Advertisement">
                                    content    
                                </x-sidebar-card>
                                
                                <x-sidebar-card title="Recent">
                                    <x-article.list title="The first article" />
                                    <x-article.list title="The first article fasdfasdfasdf fsadfhasd fasfhdsdahf" />
 
                                </x-sidebar-card>
                                
                                <x-sidebar-card title="Popular">
                                    <x-article.list title="The first article" />
                                    <x-article.list title="The first article fasdfasdfasdf fsadfhasd fasfhdsdahf" />
   
                                </x-sidebar-card>
                                <x-sidebar-card title="Tags">
                                    <div class="space-y-2">
                                        <a href="#" class="py-2 flex items-center gap-2 text-gray-600 border-b border-gray-200">
                                            <x-icons.chevron class="w-3 h-3" />
                                            <div>Building</div>
                                        </a>
                                        <a href="#" class="py-2 flex items-center gap-2 text-gray-600 border-b border-gray-200">
                                            <x-icons.chevron class="w-3 h-3" />
                                            <div>Building</div>
                                        </a>
                                        <a href="#" class="py-2 flex items-center gap-2 text-gray-600 border-b border-gray-200">
                                            <x-icons.chevron class="w-3 h-3" />
                                            <div>Building</div>
                                        </a>
                                    </div>
                                </x-sidebar-card>
                                
                            </div>
                        </div>
                    </div>
                    
                </x-container>
            </div>
        </main>
        <footer>
            <x-container>
                <div class="py-4 text-white">
                    
                    &copy; Catalyst {{ date('Y') }}. All rights reserved.
                </div>
            </x-container>
        </footer>
    </body>
</html>

<div class="post-image" style="background:url(https://4.bp.blogspot.com/-TDoUeEz_iGI/Wf8eItNC3aI/AAAAAAAAA6U/CM2Ztmr-czQOjoeivWCL60hGNfiRtNSPgCLcBGAs/s1600/pexels-photo-532571.jpeg)">


</div>
