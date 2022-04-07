<!DOCTYPE html>

    </head>
            <div class="max-w-12xl mx-auto sm:px-12 lg:px-12">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="text-gray-900 dark:text-white">{{ $title }}</h1>
                </div>

            </div>

        </div>
        @foreach($drinks as $drink)
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">{{ $drink->name}}</a></div>
                </div>

                <div class="ml-4">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <strong>Description: </strong> {{$drink->description}}
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <strong>Making: </strong> {{$drink->making}}
                    </div>
                </div>
            </div>
        @endforeach
                    <a href="https://github.com/Highworker/drinkbook" class="ml-1">
                        Highworker / drinkbook

            <div class="ml-4 text-right text-sm text-gray-500 sm:text-right sm:ml-0">
                PHP v{{ PHP_VERSION }}
            </div>
            <br>
            <div class="ml-4 text-right text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
            </div>
