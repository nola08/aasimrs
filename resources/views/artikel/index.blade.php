<h1>Artikel</h1>
<a href="{{ route ('artikel.create') }}"> Tambah Data</a>
<table border="1" cellpadding="8">
    <tr style="background: purple ; color:white;">
            <th>Id</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Author</th>
            <th>Kategori</th>
            <th>Slug</th>
            <th>Konten</th>
            <th>Status</th>
            <th>Sampul</th>
            <th></th>
        </tr>
        @foreach ($artikels as $artikel)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ \Carbon\Carbon::parse($artikel->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $artikel->Judul  }}</td>
                <td>{{ $artikel->Author }}</td>
                <td>{{ $artikel->Kategori }}</td>
                <td>{{ $artikel->Slug }}</td>
                <td>{{ $artikel->Konten }}</td>
                <td>{{ $artikel->Status }}</td>
                <td>{{ $artikel->Sampul }}</td>
                <td>
                    <a href= "{{ route('artikel.edit', $artikel->Id) }}" > Edit</a>
                    <from action="{{ route('artikel.destroy', $artikel->Id) }}" ,method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</button>
                    </from>
                </td>
            </tr>
        @endforeach
    </tbody>