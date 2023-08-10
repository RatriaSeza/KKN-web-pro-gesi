<x-layouts.admin>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary fs-3">Gesi News</h6>
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-circle-plus"></i>
                    </span>
                    <span class="text" style="font-size: 14px">Tambah Berita</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped table-hover" style="font-size: 14px" id="news-table" width="100%"
                        cellspacing="0">
                        <thead class="text-secondary">
                            <tr>
                                <th>Nomor</th>
                                <th>Tanggal Dibuat</th>
                                <th>Judul</th>
                                <th>Publish</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $newsItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $newsItem->created_at }}</td>
                                <td>{{ $newsItem->title }}</td>
                                <td>
                                    @if ($newsItem->is_publish === 1)
                                    <a href="{{ route('admin.news.toggle.publish', $newsItem->slug) }}" class="btn btn-success btn-icon-split w-100">
                                        <span class="text" style="font-size: 14px">Dipublish</span>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.news.toggle.publish', $newsItem->slug) }}" class="btn btn-danger btn-icon-split w-100">
                                        <span class="text" style="font-size: 14px">Tidak Dipublish</span>
                                    </a>
                                    @endif
                                </td>
                                <td class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="fs-6 text-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('admin.news.destroy', $newsItem->slug) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="fs-6 text-danger border border-0">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>Data Kosong</tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{-- <div class="pagination d-flex justify-content-center">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <x-slot:customJS>
        <script>
            document.getElementById('nav-news').classList.add('active');
        </script>
        </x-slot>
</x-layouts.admin>
