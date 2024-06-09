<x-layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>
    
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" :value="old('email')"/>
                            <x-form-error for="email" />
                        </div>
                    </div>  
                </x-form-field>

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password"/>
                            <x-form-error for="password" />
                        </div>
                    </div>  
                </x-form-field>

            </div>
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button>Log in</x-form-button>
        </div>
    </form>
  
</x-layout>