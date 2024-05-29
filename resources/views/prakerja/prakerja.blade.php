@extends('prakerja.template')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="flex justify-between">
    <div class="text-xl font-bold">Data User Prakerja</div>
    <div>
        <a href="{{ route('tambah') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md"></a>
    </div>
</div>

<table class="table w-full mt-5">
    <thead>
        <tr class="border border-gray-500 p-3">
            <th class="border-gray-500 p-3">Nama</th>
            <th class="border-gray-500 p-3">Email</th>
            <th class="border-gray-500 p-3">Telepon</th>
            <th class="border-gray-500 p-3">Alamat</th>
            <th class="border-gray-500 p-3">Pendidikan Terakhir</th>
            <th class="border-gray-500 p-3">Foto User</th>
            <th class="border-gray-500 p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prakerja as $i => $a)
        <tr>
            <td class="text-center border-gray-500 p-3">{{ $i + 1 }}</td>
            <td class="text-center border-gray-500 p-3">{{ $a->nama }}</td>
            <td class="text-center border-gray-500 p-3">{{ $a->email }}</td>
            <td class="text-center border-gray-500 p-3">{{ $a->telepon }}</td>
            <td class="text-center border-gray-500 p-3">{{ $a->alamat }}</td>
            <td class="text-center border-gray-500 p-3">{{ $a->pendidikan_terakhir }}</td>
            <td class="text-center border-gray-500 p-3"><img src="{{ asset ('foto_user/'.$a->foto_user) }}" alt="" class="wax-w-32"></td>
            <td class="border-gray-500 p-3">
                <div class="flex gab-3 justify-center"></div>
                <a href="{{ route('edit',$a->id) }}" class="bg-green-500 flex items-center justify-center hover:bg-green-400 text-white rounded-md w-14 h-8 ">Edit</a>
                <a href="{{ route('hapus',$a->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8 ">Hapus</a>
            </td>
        </tr>
            
        @endforeach
    </tbody>

</table>

@endsection