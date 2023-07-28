<x-layout-admin title="Thêm sản phẩm">
    <h4>Create product</h4>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.product.upsert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-app-input name="prod_name" label="Product name" />
                <x-app-input name="price" label="Price" type="number" />
                <x-app-input name="content" label="Describe" />
                <x-app-input name="cover_img" label="Image" type="file" />
                <x-app-select name="id_cat" label="Cat ID" model="category" displayMember="cat_name" valueMember="id"
                    selected="" />
                <div class="mt-3">
                    <input type="submit" value="Add new" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>
