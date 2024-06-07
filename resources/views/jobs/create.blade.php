<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Here we need some information from you.</p>
        
                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO"/>
                            <x-form-error for="title" />
                        </div>
                    </div>  
                </x-form-field>

                <x-form-field>
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$10,000 USD" />
                            <x-form-error for="salary" />
                        </div>
                    </div>
                </x-form-field>

            </div>
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
  
</x-layout>