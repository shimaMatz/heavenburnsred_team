<x-app-layout>
    <x-slot name="header">
        @can('admin-higher')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('管理者用ダッシュボード') }}

            </h2>
        @endcan
    </x-slot>

    @can('admin-higher')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if ($errors->any())
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium">これらの要件が満たされるようにしてください:</span>
                            <ul class="mt-1.5 ml-4 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <div
                    class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ユーザー編集</h5>
                    <form action="{{ route('styles.update', ['id' => $style->id]) }}" method="POST">
                        @csrf
                        @method('PUT')


                        {{-- レアリティ --}}
                        <div class="mb-6">
                            <label for="rarity_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">レアリティ <span
                                    class="text-red-500">*</label>
                            <div class="flex">
                                @foreach ($rarities as $rarity)
                                    <label class="cursor-pointer flex items-center mr-4">
                                        <input type="radio" name="rarity_id" value="{{ $rarity->id }}"
                                            class="form-radio text-stone-700"
                                            {{ $rarity->id === $style->rarity_id ? 'checked' : '' }}>
                                        <span class="ml-2 text-stone-700">{{ $rarity->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>


                        {{-- スタイル名 --}}
                        <div class="mb-6">
                            <label for="style_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">スタイル名 <span
                                    class="text-red-500">*</label>
                            <input type="name" id="style_name" name="style_name"
                                class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required value="{{ $style->style_name }}">
                        </div>


                        {{-- 役割 --}}
                        <div class="mb-6">
                            <label for="role_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">役割</label>
                            <div class="grid grid-cols-2 gap-4">
                                @foreach ($roles as $role)
                                    <label class="cursor-pointer flex items-center">
                                        <input type="radio" name="role_id" value="{{ $role->id }}"
                                            class="form-radio text-stone-700"
                                            {{ $role->id === $style->role_id ? 'checked' : '' }}>
                                        <span class="ml-2 text-stone-700">{{ $role->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- 属性 --}}
                        <div class="mb-6">
                            <label for="weapon_attribute_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">武器属性</label>
                            <div class="flex">
                                @foreach ($weapon_attributes as $weapon_attribute)
                                    <label class="cursor-pointer flex items-center mr-4">
                                        <input type="radio" name="weapon_attribute_id"
                                            value="{{ $weapon_attribute->id }}" class="form-radio text-stone-700"
                                            {{ $weapon_attribute->id === $style->weapon_attribute_id ? 'checked' : '' }}>
                                        <span class="ml-2 text-stone-700">{{ $weapon_attribute->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>


                        <div class="mb-6">
                            <label for="element_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">属性</label>
                            <div class="flex">
                                @foreach ($elements as $element)
                                    <label class="cursor-pointer flex items-center mr-4">
                                        <input type="radio" name="element_id" value="{{ $element->id }}"
                                            class="form-radio text-stone-700"
                                            {{ $element->id === $style->element_id ? 'checked' : '' }}>
                                        <span class="ml-2 text-stone-700">{{ $element->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- パッシブ１ --}}
                        <div class="mb-6">
                            <label for="passive_1"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">パッシブ１</label>
                            <select id="passive_1" name="passive_1" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($passive1 as $passive_one)
                                    <option value="{{ $passive_one->id }}"
                                        {{ $passive_one->id === $style->passive_1 ? 'selected' : '' }}>
                                        {{ $passive_one->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- パッシブ２ --}}
                        <div class="mb-6">
                            <label for="passive_2"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">パッシブ２</label>
                            <select id="passive_2" name="passive_2" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($passive2 as $passive_two)
                                    <option value="{{ $passive_two->id }}"
                                        {{ $passive_two->id === $style->passive_2 ? 'selected' : '' }}>
                                        {{ $passive_two->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- パッシブ３ --}}
                        <div class="mb-6">
                            <label for="passive_3"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">パッシブ３</label>
                            <select id="passive_3" name="passive_3" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($passive3 as $passive_three)
                                    <option value="{{ $passive_three->id }}"
                                        {{ $passive_three->id === $style->passive_3 ? 'selected' : '' }}>
                                        {{ $passive_three->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{--　スキル --}}
                        <div class="mb-6">
                            <label for="skill"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">スキル</label>
                            <select id="skill" name="skill" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}"
                                        {{ $skill->id === $style->skill_id ? 'selected' : '' }}>
                                        {{ $skill->skill_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{--　専用スキル --}}
                        @if ($style->exclusive_skill_id)
                            <div class="mb-6">
                                <label for="exclusive_skill"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">専用スキル</label>
                                <select id="exclusive_skill" name="exclusive_skill" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($exclusive_skills as $exclusive_skill)
                                        <option value="{{ $exclusive_skill->id }}"
                                            {{ $exclusive_skill->id === $style->exclusive_skill_id ? 'selected' : '' }}>
                                            {{ $exclusive_skill->skill_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        {{--　ジェネライズ --}}
                        <div class="mb-6">
                            <label for="generated"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ジェネライズ</label>
                            <input type="text" id="generated" name="generated"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required value="{{ $style->generated }}">
                        </div>

                        <button
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="submit">更新</button>
                    </form>
                </div>
            </div>
        </div>
    @endcan

</x-app-layout>
