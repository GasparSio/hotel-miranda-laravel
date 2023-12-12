<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create your Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="roomservice/your-orders">
                    @csrf

                    <!-- Email Address -->
                    <div style="width: 95%; margin: auto; margin-top: 10px;" class="mt-4 flex flex-col">
                        <x-input-label for="room" :value="__('Room Number')" class="m-auto w-11/12" />
                        <x-text-input placeholder="Write your room number" id="room" class="block mt-1 m-auto w-11/12" type="number" name="room_id" :value="old('room')" max="300" required autofocus />
                        <x-input-error :messages="$errors->get('room')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div style="width: 95%; margin: auto; margin-top: 10px;" class="flex flex-col">
                        <label for="type-order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                        <select id="type-order" name="type" class="m-auto w-11/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="" selected disabled>Select your type order</option>
                            <option value="food">Food</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div style="width: 95%; margin: auto; margin-top: 10px;" class="flex flex-col">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea id="message" rows="4" name="description" class="block text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 m-auto w-11/12" placeholder="Write your thoughts here..." required></textarea>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <div class="flex items-center justify-center mt-4">

                        <x-primary-button style="margin: auto; margin-top: 10px; margin-bottom: 10px;" class="ms-3">
                            {{ __('Make your order') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>