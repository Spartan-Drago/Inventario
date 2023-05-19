<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Registro del Personal') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="/persona">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="nombre" :value="__('Nombre Completo')"/>
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Contraseña')"/>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
                    </div>
            
                    <div class="flex items-center justify-end mt-4">            
                        <x-primary-button class="ml-3">
                            {{ __('Registrar') }}
                        </x-primary-button>
                    </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>