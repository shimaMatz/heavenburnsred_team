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

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    レアリティ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    キャラクター
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    名前
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    属性
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ジェネライズ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($styles as $style)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $style->rarity->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $style->character->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $style->style_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($style->element)
                                            {{ $style->element->name }}
                                        @endif
                                        @if ($style->weapon_attribute)
                                            {{ $style->weapon_attribute->name }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($style->generated == 1)
                                            可
                                        @else
                                            不可
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/admin/characters/{{ $style->id }}/edit"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    @endcan

</x-app-layout>
