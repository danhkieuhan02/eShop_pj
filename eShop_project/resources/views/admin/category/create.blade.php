<x-layout-admin title="Thêm danh mục">
    <h4 class="text-1">Create Category</h4>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.category.upsert') }}" method="post" enctype="multipart/form">
                @csrf
                <x-app-input name="cat_name" label="Category name" />
                <div class="mt-3">
                    <input type="submit" value="Add new" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>
