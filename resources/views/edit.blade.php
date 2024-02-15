@extends('layouts.app')
@section('body')
<form action="{{ route('update', $id) }}" method="POST">
    @csrf
    @method('put')
    <table class="table mt-4 d-flex justify-content-center">
        <tr>
            <td  style="width: 35rem;">
                <label>product name</label>
                <input name="name" type="text" class="form-control" placeholder="product name" value="{{ $data->name }}">
            </td>
        </tr>
        <tr>
            <td>
                <label>product type</label>
                <select name="product_type" class="form-control">
                    <option value="Opsi" selected>Pilih Opsi</option>
                    <option value="garansi" @if($data->product_type == 'garansi') selected @endif>garansi</option>
                    <option value="non-garansi" @if($data->product_type == 'non-garansi') selected @endif>non-garansi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>total</label>
                <input value="{{ $data->total }}" name="total" type="number" class="form-control">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-info">submit</button>
            </td>
        </tr>
    </table>

</form>

@endsection