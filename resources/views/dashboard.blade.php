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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('ダッシュボード') }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
