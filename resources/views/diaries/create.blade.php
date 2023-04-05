<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ 'Create Diary' }}
        </h2>
    </x-slot>
    <div class="font-sans antialiased">
        <div class="flex flex-col items-center pt-4 bg-gray-100 sm:justify-start sm:pt-0 min-h-fit">
            <div class="w-full px-16 py-8 mt-4 mb-4 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="flex justify-end mb-4">
                    <a href="{{ route('diaries.index') }}" class="px-4 py-2 bg-gray-500 rounded-md text-sky-100 hover:bg-gray-600">
                        <- Back
                    </a>
                </div>
                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form action="{{ route('diaries.index') }}" method="POST">
                        @csrf
                        <!-- Mahlzeit -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="mahlzeit">
                                Mahlzeit
                            </label>
                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="mahlzeit" value="{{old('mahlzeit')}}">
                            @error('mahlzeit')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Essen -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="essen">
                                Essen
                            </label>
                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="essen" value="{{old('essen')}}">
                            @error('essen')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Getränk -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="getraenk">
                                Getränk
                            </label>
                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="getraenk" value="{{old('getraenk')}}">
                            @error('getraenk')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Ort -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="ort">
                                Ort
                            </label>
                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="ort" value="{{old('ort')}}">
                            @error('ort')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Beschwerden -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="beschwerden">
                                Beschwerden
                            </label>
                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="beschwerden" value="{{old('beschwerden')}}">
                            @error('beschwerden')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Datum -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="datum">
                                Datum
                            </label>
                            <x-text-input id="datum" class="block w-full mt-1" type="date" name="datum" required />
                            @error('datum')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <!-- Uhrzeit -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="uhrzeit">
                                Uhrzeit
                            </label>
                            <x-text-input id="uhrzeit" class="block w-full mt-1" type="time" name="uhrzeit" required />
                            @error('uhrzeit')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>                         
                        <!-- Anmerkungen -->
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="anmerkungen">
                                Anmerkungen
                            </label>
                            <textarea name="anmerkungen"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="6">{{old('anmerkungen')}}</textarea>
                            @error('anmerkungen')
                            <span class="text-sm text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>  
                        <div class="flex items-center justify-start mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-2 text-sm font-semibold rounded-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>