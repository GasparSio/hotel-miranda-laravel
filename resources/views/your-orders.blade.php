<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your orders') }}
        </h2>
    </x-slot>

    <div class="py-12 relative overflow-x-auto">
        <table class="mx-auto max-w-1100 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Room Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 table-row">
                    <form method="POST" action="/roomservice/your-orders" id="form-orders">
                        @csrf
                        @method('PUT')
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="room-number">{{ $order['room_id'] }}</span>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="room-number">{{ $order['created_at'] }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <select id="{{$order->id}}-type" name="type" class="m-auto w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 disabled:border-transparent disabled:bg-transparent disabled:text-black" disabled>
                                <option value="" selected disabled>{{ $order['type'] }}</option>
                                <option value="Food">Food</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                        <td class="px-6 py-4">
                            <input id="{{$order->id}}-desc" type="text" name="description" value="{{ $order['description'] }}" class="form-input order-description disabled:border-transparent disabled:text-black" disabled>
                        </td>
                        <td class="px-6 py-4">
                            <svg id="edit-button" onclick="editOrders('{{$order->id}}')" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                        </td>
                        <td class="px-6 py-4">
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                            <x-secondary-button type="submit" class="btn btn-primary">Save changes</x-secondary-button>
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


<script>
    function editOrders(order_id) {
        console.log(order_id);
        document.getElementById(order_id + '-type').toggleAttribute('disabled');
        document.getElementById(order_id + '-desc').toggleAttribute('disabled');
    }
</script>