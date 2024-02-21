<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-admin::container>
            <x-admin::primary-button :href="route('admin.users.create')">
                Add new
            </x-admin::primary-button>


            <x-admin::card class="mt-4">
                <x-admin::table :headers="$headers">
                    @foreach ($users as $user)
                        <x-admin::table.tr>
                            <x-admin::table.td>
                                @if ($user->image)
                                    <img src="{{ $user->imageUrl() }}" alt="" class="w-16 h-16 object-cover">
                                @else
                                    <span>-</span>
                                @endif
                            </x-admin::table.td>
                            <x-admin::table.td>
                                {{ $user->name }}
                            </x-admin::table.td>
                            <x-admin::table.td>
                                {{ $user->email }}
                            </x-admin::table.td>
                            <x-admin::table.td>
                                {{ $user->type->name }}
                            </x-admin::table.td>
                            <x-admin::table.td>
                                {{ $user->created_at->toDayDateTimeString() }}
                            </x-admin::table.td>
                            <x-admin::table.td>
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('admin.users.edit', $user) }}">
                                        <x-icons.edit class="w-5 h-5 text-blue-500" />
                                    </a>
                                    <form class="flex" action="{{ route('admin.users.destroy', $user) }}"
                                        method="post" x-data x-ref="deleteForm"
                                        x-on:submit.prevent="() => confirm('Are you sure, you want to delete this user?') ? $refs.deleteForm.submit():null">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <x-icons.trash class="w-5 h-5 text-red-500" />
                                        </button>
                                    </form>
                                </div>
                            </x-admin::table.td>

                        </x-admin::table.tr>
                    @endforeach
                </x-admin::table>
                @if ($users->hasPages())
                    <div class="mt-4">

                        {{ $users->links() }}

                    </div>
                @endif

            </x-admin::card>
        </x-admin::container>
    </div>
</x-app-layout>
