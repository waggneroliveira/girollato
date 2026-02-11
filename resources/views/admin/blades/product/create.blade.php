@extends('admin.core.admin')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{route('admin.dashboard.product.index')}}">Produtos</a></li>
                                <li class="breadcrumb-item active">Cadastrar Produto</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Produtos</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <form action="{{route('admin.dashboard.product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="mb-3 col-6 d-flex align-items-start flex-column">
                                    <label for="category-select" class="form-label">Categoria(s) <span class="text-danger">*</span></label>
                                    @php
                                        $currentCategory = isset($product) ? $product->product_category : null;
                                        $currentBrand = isset($product) ? $product->product_brand : null;
                                    @endphp
                                
                                    <select name="product_category_id" class="form-select" id="category-select" required>
                                        <option value="" disabled selected>Selecione o Categoria</option>
                                        @foreach ($productCategory as $categoryValue => $categoryLabel)
                                            <option value="{{ $categoryValue }}" {{ $categoryValue == $currentCategory ? 'selected' : '' }}>
                                                {{ $categoryLabel }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-6 d-flex align-items-start flex-column">
                                    <label for="brand-select" class="form-label">Marca(s) <span class="text-danger">*</span></label>
                                    @php
                                        $currentBrand = isset($product) ? $product->product_brand : null;
                                    @endphp
                                
                                    <select name="brand_id" class="form-select" id="brand-select" required>
                                        <option value="" disabled selected>Selecione a Marca</option>
                                        @foreach ($productBrand as $brandValue => $brandLabel)
                                            <option value="{{ $brandValue }}" {{ $brandValue == $currentBrand ? 'selected' : '' }}>
                                                {{ $brandLabel }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Digite seu nome" required>
                            </div>
        
                            <div class="mb-3 col-12">
                                <label for="sizes" class="form-label">Tamanho do produto </label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div id="sizes-wrapper" class="col-9 d-flex flex-row">
                                        <!-- Input inicial já com estrutura de remoção -->
                                        <div class="d-flex me-2">
                                            <input type="text" class="form-control me-2" name="sizes[]" placeholder="Ex: 1kg">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">×</button>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary mt-0 text-black ms-2" onclick="addSize()">Adicionar</button>
                                </div>

                                <script>
                                    function addSize() {
                                        const wrapper = document.getElementById('sizes-wrapper')
                                        
                                        const div = document.createElement('div')
                                        div.className = 'd-flex me-2'
                                        
                                        const input = document.createElement('input')
                                        input.type = 'text'
                                        input.name = 'sizes[]'
                                        input.placeholder = 'Ex: 5kg'
                                        input.className = 'form-control me-2'
                                        
                                        const button = document.createElement('button')
                                        button.type = 'button'
                                        button.className = 'btn btn-outline-danger'
                                        button.innerHTML = '×'
                                        button.onclick = function() {
                                            wrapper.removeChild(div)
                                        }
                                        
                                        div.appendChild(input)
                                        div.appendChild(button)
                                        wrapper.appendChild(div)
                                    }
                                </script>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Breve descrição <span class="text-danger">*</span></label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Digite uma breve descrição" required>
                            </div>
                            
                            <div class="mb-3 col-12 d-flex align-items-start flex-column">
                                <label for="textarea-create" class="form-label">Texto</label>
                                <textarea name="text" class="form-control col-12" id="textarea-create" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input name="active" type="checkbox" class="form-check-input" id="invalidCheck{{isset($product->id)?$product->id:''}}" />
                                    <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-6">
                            <div class="row">                                
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="path_image" class="form-label">Imagem</label>
                                        <input type="file" name="path_image" data-plugins="dropify" />
                                        <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
                                    </div>
                                </div>
                            </div>                            
                            
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                <button type="submit" class="btn btn-primary text-black waves-effect waves-light">{{__('dashboard.btn_create')}}</button>
                            </div>                                                 
                        </div>
                    </div>
                </form> 
            </div> <!-- fecha a row aberta -->

        </div> <!-- fecha container-fluid -->
    </div> <!-- fecha content -->
</div> <!-- fecha content-page -->

<script>
    // Inicializa o CKEditor para o textarea de criação
    CKEDITOR.replace('textarea-create', {
        allowedContent: true,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'] },
            { name: 'paragraph', items: [
                'NumberedList', 'BulletedList', '-', 
                'Outdent', 'Indent', '-', 
                'Blockquote', '-', 
                'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'
            ] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize'] }
        ],
        filebrowserUploadUrl: "{{ route('admin.dashboard.product.uploadImageCkeditor') }}",
        fileTools_requestHeaders: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });

</script>
@endsection