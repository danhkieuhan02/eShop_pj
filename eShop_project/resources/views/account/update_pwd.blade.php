<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Update Password</title>
</head>

<body>
    @include('include/adminnav')
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
            <div class="col-md-6">
                <h3>Update Password</h3>
                <form action="{{ route('account.changePassword') }}" method="post">
                    @csrf
                    <x-app-input name="old_password" type="password" label="Old Password" />
                    <x-app-input name="new_password" type="password" label="New Password" />
                    <x-app-input name="cf_password" type="password" label="Confirm assword" />

                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>
            </div>
        </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>
