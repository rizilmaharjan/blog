<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-admin::container>
            <x-admin::card class="mt-4">
                <form method="post" enctype="multipart/form-data"
                    action={{ $user->exists ? route('admin.users.update', $user) : route('admin.users.store') }}>
                    @csrf
                    @if ($user->exists)
                        @method('PUT')
                    @endif
                    <div class="grid grid-cols-2 gap-6">
                        @if ($user->image)
                            <div class="text-center">

                                <img src="{{ $user->imageUrl() }}" class="w-32 h-32 mx-auto object-cover">
                                <span>Previous Image</span>
                            </div>
                        @endif
                        <div class="col-span-2">

                            <x-admin::input-group type="file" name="image" :label="__('Image')" />

                        </div>
                        <x-admin::input-group name="name" :label="__('Name')" :value="$user->name" required />
                        <x-admin::input-group type="email" name="email" :label="__('Email')" :value="$user->email"
                            required />
                        <x-admin::input-group type="password" name="password" :label="__('Password')" :required="!$user->exists" />
                        <x-admin::input-group type="password" name="password_confirmation" :label="__('Confirm Password')"
                            :required="!$user->exists" />
                        <x-admin::select-group :items="$types" name="type" label="User Type" :value="$user->type->value" />
                        <div class="col-span-2">
                            <x-admin::textarea-group type="password" name="description" :label="__('Description')"
                                :value="$user->description" required />

                        </div>
                        <div class="col-span-2">

                            <x-admin::primary-button>
                                submit
                            </x-admin::primary-button>

                        </div>



                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />


                </form>

            </x-admin::card>
        </x-admin::container>
    </div>
</x-app-layout>
