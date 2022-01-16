<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="files color form-group mb-3">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <!-- <img src="uploads/{{ Session::get('file') }}"> -->
        @endif
        <@if (count($errors)> 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="file" multiple name="file" class="form-control">
                </div>
                <div">
                    <button type="submit" class="btn btn-success">Upload File</button>
    </div>
    </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script>
</x-app-layout>