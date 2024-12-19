@extends('layoutKaryawan')
@section('konten')
<div class="container">
    <h2>Form Tambah Gaji</h2>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('karyawan.gaji') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gaji">Gaji:</label>
            <input type="text" class="form-control" id="gaji" name="gaji" placeholder="0">
        </div>
        <div class="form-group">
            <label for="info">Info:</label>
            <input type="text" class="form-control" id="info" name="info" placeholder="0">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#name').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ url('/karyawan/gaji/autocomplete') }}",
                    data: {
                        query: request.term
                    },
                    dataType: "json",
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.nama,
                                value: item.nama
                            };
                        }));
                    }
                });
            },
            minLength: 1,
        });
    });
</script>

@endsection