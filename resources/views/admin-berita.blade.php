<x-layouts.admin>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary fs-3">Gesi News</h6>
                <a href="#" class="btn btn-primary btn-icon-split">
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
                            @for ($i = 0; $i < 10; $i++)
                                <tr">
                                    <td>61</td>
                                    <td>Tiger Nixon</td>
                                    <td>Lorem eligendi veniam.</td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-icon-split">
                                            <span class="text" style="font-size: 14px">Publish</span>
                                        </a>
                                    </td>
                                    <td class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-6 text-warning"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="fs-6 text-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="pagination d-flex justify-content-center">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            background-color: whitesmoke;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4e73df;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>

    <x-slot:customJS>
        <script></script>
        </x-slot>
</x-layouts.admin>
