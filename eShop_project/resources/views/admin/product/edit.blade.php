<x-layout-admin title="Sửa sản phẩm">
    <div class="row">
        <div class="col=12">
            <h2 class="mt-4">Edit product</h2>
        </div>
        <div class="col-md-6">
            <form action="{{ route('admin.product.upsert', ['id' => $data->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <x-app-input name="prod_name" label="Product name" value="{{ $data->prod_name }}" />
                    <x-app-input name="price" label="Price" type="number" value="{{ $data->price }}" />
                    <x-app-input name="content" label="Describe" value="{{ $data->content }}" />
                    <x-app-input name="cover_img" label="Image" type="file" />
                    <x-app-select name="id_cat" label="Cat ID" model="category" displayMember="cat_name"
                        valueMember="id" selected="{{ $data->id_cat }}" />

                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Edit">
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>
