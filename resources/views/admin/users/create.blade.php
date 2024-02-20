<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-admin::container>
            <x-admin::card class="mt-4">
                <form method="post" enctype="multipart/form-data" action={{ route('admin.users.store') }}>
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-2">

                            <x-admin::input-group type="file" name="image" :label="__('Image')" />

                        </div>
                        <x-admin::input-group name="name" :label="__('Name')" required />
                        <x-admin::input-group type="email" name="email" :label="__('Email')" required />
                        <x-admin::input-group type="password" name="password" :label="__('Password')" required />
                        <x-admin::input-group type="password" name="password_confirmation" :label="__('Confirm Password')" required />
                        <div class="col-span-2">
                            <x-admin::textarea-group type="password" name="description" :label="__('Description')" required />

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
