<x-app-layout title="Create Users">
<x-slot name="heading">Create Users</x-slot>
    <form action="/users" method="post" class="space-y-6">
    @csrf
    <div>
        <label for="name">Name</label>
        <input class="border px-4 py-2 rouded block mt-1" type="text" name="name" id="name">
    </div>
    <div>
        <label for="name">Email</label>
        <input class="border px-4 py-2 rouded block mt-1" type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">password</label>
        <input class="border px-4 py-2 rouded block mt-1" type="password" name="password" id="password">
    </div>

    <x-button>
        Save
    </x-button>
    </form>
</x-app-layout>
