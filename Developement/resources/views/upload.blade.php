<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="files color form-group mb-3">
        <input type="file" multiple name="files">
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</x-app-layout>