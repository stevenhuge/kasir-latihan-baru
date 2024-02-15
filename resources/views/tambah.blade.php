@extends('layouts.app')
@section('body')
    <div class="container">
        <label class="mt-5 form-control" style="background-color: red; color: white; font-weight: bold;">
            "Pesan Penting: Sebelum menambahkan produk baru, harap pastikan bahwa semua detail telah diperiksa dengan cermat. Kesalahan kecil pun bisa berdampak besar. Kualitas data yang akurat sangat penting. Mari berhati-hati dan teliti dalam setiap langkah. Terima kasih atas perhatiannya."
        </label>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            @method('post')
            <table class="table mt-4 d-flex justify-content-center">
                <tr>
                    <td  style="width: 35rem;">
                        <label>product name</label>
                        <input name="name" type="text" class="form-control" placeholder="product name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>product type</label>
                        <select name="product_type" class="form-control">
                            <option value="Opsi" selected>Pilih Opsi</option>
                            <option value="garansi">garansi</option>
                            <option value="non-garansi">non-garansi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>total</label>
                        <input name="total" type="number" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-info">submit</button>
                    </td>
                </tr>
            </table>

        </form>
        
    </div>
    @endsection
