<div>
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div style="margin-bottom: 10px;">
            <label for="judul">Judul:</label><br>
            <input type="text" name="judul" id="judul" value="{{ $artikel->judul }}">
        </div>

        <!-- Slug -->
        <div style="margin-bottom: 10px;">
            <label for="slug">Slug:</label><br>
            <input type="text" name="slug" id="slug" value="{{ $artikel->slug }}">
        </div>

        <!-- Kategori -->
        <div style="margin-bottom: 10px;">
            <label for="kategori">Kategori:</label><br>
            <textarea name="kategori" id="kategori" rows="2" cols="40">{{ $artikel->kategori }}</textarea>
        </div>

        <!-- Konten -->
        <div style="margin-bottom: 10px;">
            <label for="konten">Konten:</label><br>
            <textarea name="konten" id="konten" rows="5" cols="40">{{ $artikel->konten }}</textarea>
        </div>

        <!-- Status -->
        <div style="margin-bottom: 10px;">
            <label for="status">Status:</label><br>
            <select name="status" id="status">
                <option value="draft" {{ $artikel->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="publish" {{ $artikel->status == 'publish' ? 'selected' : '' }}>Publish</option>
            </select>
        </div>

        <!-- Sampul -->
        <div style="margin-bottom: 10px;">
            <label for="sampul">Sampul:</label><br>
            <input type="file" name="sampul" id="sampul"><br>
            @if ($artikel->sampul)
                <small>File sekarang: {{ $artikel->sampul }}</small>
            @endif
        </div>

        <!-- Tanggal -->
        <div style="margin-bottom: 10px;">
            <label for="tanggal">Tanggal:</label><br>
            <input type="date" name="tanggal" id="tanggal" value="{{ $artikel->tanggal }}">
        </div>

        <!-- Author -->
        <div style="margin-bottom: 10px;">
            <label for="author">Author:</label><br>
            <input type="text" name="author" id="author" value="{{ $artikel->author }}">
        </div>

        <!-- Tombol Submit -->
        <input type="submit" value="Update">
    </form>
</div>