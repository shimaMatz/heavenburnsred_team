<x-app-layout>
    <x-slot name="header">
        @can('admin-higher')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('管理者用ダッシュボード') }}

            </h2>
        @elsecan('user-higher')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('一般ユーザー用ダッシュボード') }}
            </h2>
        @endcan
    </x-slot>

    @can('admin-higher')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Card Section -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
                        <!-- Card -->
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="mb-4 text-2xl font-semibold leadi">レアリティ</h2>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                名前
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rarities as $rarity)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $rarity->id }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $rarity->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="mb-4 text-2xl font-semibold leadi">役割</h2>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                名前
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $role->id }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $role->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="mb-4 text-2xl font-semibold leadi">武器属性</h2>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                名前
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($weaponAttributes as $weaponAttribute)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $weaponAttribute->id }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $weaponAttribute->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Card -->



                        <!-- Card -->
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="mb-4 text-2xl font-semibold leadi">属性</h2>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                名前
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($elements as $element)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $element->id }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $element->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>
        </div>
    @endcan



</x-app-layout>
