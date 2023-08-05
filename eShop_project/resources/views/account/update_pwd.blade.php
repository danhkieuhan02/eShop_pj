<x-layout-admin>
    <div class="container">
        @if (!empty(session('_success')))
            <div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (!empty(session('_errors')))
            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('_errors') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Update Password</h3>
                <form action="{{ route('account.changePassword') }}" method="post">
                    @csrf
                    <x-app-input name="old_password" type="password" label="Old Password" />
                    <x-app-input name="new_password" type="password" label="New Password" />
                    <x-app-input name="cf_password" type="password" label="Confirm password" />

                    <div class="mt-3 text-center">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>
            </div>
        </div>
        </form>
    </div>
    <x-slot name="css">
        <link rel="stylesheet" href="/css/updatepass.css" />
    </x-slot>
</x-layout-admin>
