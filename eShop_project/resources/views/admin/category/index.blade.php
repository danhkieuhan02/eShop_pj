{{-- @extends('x-layout.admin') --}}
@section('title', 'category list')
@section('main')

    <x-layout-admin>
        <h4>Categories List</h4>
        <form method="get" class="form-inline">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="key" placeholder="Search by category name"
                    aria-label="Search by name" aria-describedby="button-addon2">
                <button class="btn btn-secondary" type="submit" id="button-addon2">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <div class="btn">
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary my-12">
                <i class="bi bi-building-add"></i></a>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>CAT name</th>
                            <th>Create at</th>
                            <th>Update at</th>
                            <th>Edit - Destroy</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->cat_name }}</td>
                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.category.destroy', ['id' => $item->id]) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- giao diện phân trang --}}
                {{ $data->links() }}
                </tbody>
                </table>
            </div>
        </div>
    </x-layout-admin>
