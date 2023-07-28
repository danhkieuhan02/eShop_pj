<x-layout-admin title="Sửa danh mục">
    <div class="row">
        <div class="col=12">
            <h2 class="mt-4">Edit category</h2>
        </div>
        <div class="col-md-6">
            <form action="{{ route('admin.category.upsert', ['id' => $data->id]) }}" method="POST">
                @csrf
                <div class="mt-3">
                    <x-app-input name="cat_name" label="Cat name" value="{{ $data->cat_name }}" />
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn  btn-success" value="Edit">
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>
