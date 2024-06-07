<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
        
                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name"/>
                            <x-form-error for="first_name" />
                        </div>
                    </div>  
                </x-form-field>

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name"/>
                            <x-form-error for="last_name" />
                        </div>
                    </div>  
                </x-form-field>

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email"/>
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

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password"/>
                            <x-form-error for="password_confirmation" />
                        </div>
                    </div>  
                </x-form-field>
            </div>
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button>Register</x-form-button>
        </div>
    </form>
  
</x-layout>