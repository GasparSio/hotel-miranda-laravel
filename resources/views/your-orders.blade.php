<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your orders') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Room Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <form method="POST" action="/roomservice/your-orders/{{$order['id']}}">
                        @csrf
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input type="number" name="room_id" value="{{ $order['room_id'] }}" class="form-input">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" name="type" value="{{ $order['type'] }}" class="form-input">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" name="description" value="{{ $order['description'] }}" class="form-input">
                        </td>
                        <td class="px-6 py-4">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </td>
                    </form>
                    <td class="px-6 py-4">
                        <form method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                            <x-primary-button class="ms-3">
                                Delete
                            </x-primary-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>