<x-layouts.admin>
    <x-slot:title>
        Admin | Berita
        </x-slot>

        <div class="card shadow mb-4 mx-2">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary fs-3">Gesi News | Buat Berita</h6>
            </div>
            <div class="card-body" style="font-size: 14px">
                <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input name="title" type="text" class="form-control form-control-sm" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input name="published_date" type="date" class="form-control form-control-sm col-sm-2" id="date">
                    </div>
                    <div class="mb-3">
                        <label for="summary" class="form-label">Kesimpulan Berita</label>
                        <input name="summary" type="text" class="form-control form-control-sm" id="summary">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Berita</label>
                        <textarea id="content" class="form-control form-control-sm" name="content" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="is_publish" class="form-label">Publish</label>
                        <select id="is_publish" name="is_publish" class="form-select form-select-sm col-sm-2">
                            <option selected>Pilih Publish</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover Berita</label>
                        <input name="cover_path" class="form-control form-control-sm col-sm-4" id="cover" type="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Berita</button>
                </form>
            </div>
        </div>
        </div>

        <x-slot:customJS>
            <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>
            <script>
                document.getElementById('nav-news').classList.add('active');

                tinymce.init({
                    selector: 'textarea', // change this value according to your HTML
                    plugins: 'link table image lists',
                    height: 500,
                    menubar: false,
                    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table',
                    table_appearance_options: false,
                    automatic_uploads: true,
                    file_picker_types: 'image',
                    images_upload_types: '/program_detail',
                    /* and here's our custom image picker*/
                    file_picker_callback: function(cb, value, meta) {
                        let input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/*');
                        input.onchange = function() {
                            let file = this.files[0];

                            let reader = new FileReader();
                            reader.onload = function() {
                                let id = 'blobid' + (new Date()).getTime();
                                let blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                let base64 = reader.result.split(',')[1];
                                let blobInfo = blobCache.create(id, file, base64);
                                blobCache.add(blobInfo);

                                cb(blobInfo.blobUri(), {
                                    title: file.name
                                });
                            };
                            reader.readAsDataURL(file);
                        };
                        input.click();
                    },
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                });
            </script>
            </x-slot>
</x-layouts.admin>
