@extends('Layouts.index')

@section('title', 'Product')

@section('breadcrumb')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Product</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
      </ol>
    </nav>
  </div>
@endsection




@section('container')

        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button> --}}

    <div id="read"></div>
         


  @endsection
  
  @section('script')
  <script>
        $(document).ready(function() {
            read();
            toastr.info('Welcome to CRUD ajax with READ')
        });

        // read product all 
        function read() {
            $.get("{{ url('product/read') }}", {} , function(data, status) {
                $('#read').html(data);
            });
        }

        // create product
        function create() {
            $.get("{{ url('product/create') }}", {} , function(data, status) {
                $('#modalTitle').html('Add Product');
                $('#modalContent').html(data);
                $('#modal').modal('show');
            });
        }

        // function menampung data
        function store() {
            var nama = $('#nama').val();
            var harga = $('#harga').val();
            var stok = $('#stok').val();
            var desc = $('#desc').val();
            var produsen = $('#produsen').val();
            var perusahaan = $('#perusahaan').val();

                $.ajax({
                    type: "get",
                    url: "{{ url('product/store') }}",

                    data: "nama=" + nama + 
                                '&harga=' + harga +
                                '&stok=' + stok +
                                '&desc=' + desc +
                                '&produsen=' + produsen +
                                '&perusahaan=' + perusahaan,

                    success: function(data) {
                        $('.close').click();
                        $.get("{{ url('product') }}");
                        read();
                        toastr.success('Data Berhasil Ditambahkan')
                    }
            });
        }

        function edit(id) {
                $.get("{{ url('product/edit') }}/" + id, {} , function(data, status) {
                    $('#modalTitle').html('Edit Product');
                    $('#modalContent').html(data);
                    $('#modal').modal('show');
                })
        }

        function update(id) {
            var nama = $('#nama').val();
            var harga = $('#harga').val();
            var stok = $('#stok').val();
            var desc = $('#desc').val();
            var produsen = $('#produsen').val();
            var perusahaan = $('#perusahaan').val();

                $.ajax({
                    type: "get",
                    url: "{{ url('product/update') }}/" + id,

                    data: "nama=" + nama + 
                                '&harga=' + harga +
                                '&stok=' + stok +
                                '&desc=' + desc +
                                '&produsen=' + produsen +
                                '&perusahaan=' + perusahaan,

                    success: function(data) {
                        $('.close').click();
                        $.get("{{ url('product') }}");
                        read();
                        toastr.info('Data Berhasil Diubah');
                    }
            });
        }

        function destroy(id) {
            var nama = $('#nama').val();
            var harga = $('#harga').val();
            var stok = $('#stok').val();
            var desc = $('#desc').val();
            var produsen = $('#produsen').val();
            var perusahaan = $('#perusahaan').val();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                    $.ajax({
                    type: "get",
                    url: "{{ url('product/destroy') }}/" + id,
                    data: "nama=" + nama + 
                            '&harga=' + harga +
                            '&stok=' + stok +
                            '&desc=' + desc +
                            '&produsen=' + produsen +
                            '&perusahaan=' + perusahaan,
                        success: function(data, status) {
                            if(status = '200') {
                                $.get("{{ url('product') }}");
                                read();
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )                            
                            }
                        }, 
                    })
                }

                })
           
        }


    </script>
@endsection