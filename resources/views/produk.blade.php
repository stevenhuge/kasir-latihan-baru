@extends('layouts.app')
@section('body')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>NAME</th>
                <th>PRODUCT TYPE</th>
                <th>TOTAL</th>
                <th colspan="2" class="text-center">AKSI</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $row)
                <tr>
                    <td class="text-truncate" style="max-width: 200px;"> {{ $row->name }} </td>
                    <td> {{ $row->product_type }} </td>
                    <td> {{ $row->total }} </td>
                    <td colspan="2" class="text-center">
                        <a href="{{ route('destroy', $row->id) }}" class="btn btn-danger"><i
                                class="fa fa-trash"></i></a>
                        <a href="{{ route('edit', $row->id) }}" class="btn btn-warning"><i
                                class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i
                                class="fa fa-info-circle"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td>name</td>
                                                <td>product type</td>
                                                <td>total</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->product_type }}</td>
                                                <td>{{ $row->total }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4"><a class="btn btn-secondary" href="/produk/tambah">Tambah Produk</a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Tambahkan script jQuery dan Bootstrap jika belum ditambahkan -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
