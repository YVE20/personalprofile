@extends('layouts.adminApp',['title' => 'YVE20 | Dashboard'])
@section('content')
@include('Admin.modal')
<center>
	<h3 class="mt-5"> Data Artikel Publish </h3>
	<div class="card col-lg-6 mt-3">
		<div class="card-body">
			<button data-toggle='modal' data-target='#addModal' class="btn btn-primary" style="float: left;margin:10px;"> <i class="fas fa-plus-circle"></i> Tambah Artikel </button>
			<a style="float:right" href="{{url('/logout')}}"> Logout </a>
			<table class="table table">
				<thead>
					<tr>
						<th> No </th>
						<th> ID User </th>
						<th> Judul </th>
						<th> Tanggal Terbit </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					@if(count($artikel) == 0)
                        <tr>
                            <th colspan="5"> <center> TIDAK ADA DATA </center> </th>
                        </tr>
                    @else
                        @foreach($artikel as $ar)
                            @php $split = explode('-',$ar->tanggal_terbit)  @endphp
                            <tr>
                                <td> {{$ar->id_artikel}} </td>
                                <td> {{$ar->user_id == "" ? "-" : $ar->user_id}} </td>
                                <td> {{$ar->judul}} </td>
                                <td> {{$split[2].'-'.$split[1].'-'.$split[0]}} </td>
                                <td>
                                    <button data-toggle='modal' data-target='#editModal' onclick="editArtikel('{{$ar->id_artikel}}','{{$ar->judul}}','{{$ar->tanggal_terbit}}','{{$ar->waktu}}')" class="btn btn-warning text-white"> <i class="fas fa-pencil-alt"></i> </button>
                                    <button onclick="deleteArtikel('{{$ar->id_artikel}}')" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>  </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
				</tbody>
			</table>
	  	</div>
	</div>
</center>
@endsection
@push('js')
<script>
    tinymce.init({
        selector: '#isi'
    });
    @if(session()->has('isSuccess'))
        Swal.fire({
            icon: '{{session()->has("icon") ? session("icon") : "success"}}',
            title: '{{session("judul_alert")}}',
            showConfirmButton: false,
            timer: 1500
        })
    @endif
    function editArtikel(id_artikel,judul,tanggal_terbit,waktu,isi){
        $('#id_artikel').val(id_artikel);
        $('#judul').val(judul);
        $('#tanggal_terbit').val(tanggal_terbit);
        $('#waktu').val(waktu);
        $.ajax({
            url : '<?= url('/isiEditTinyMCE') ?>',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {id_artikel : id_artikel},
            method : 'POST',
            success:function(data){
                tinymce.init({
                    selector: '#isiArtikel'
                });
                $('#isiArtikel').val((data));
            }
        });
    }
    function deleteArtikel(id_artikel){
        Swal.fire({
            title: 'Peringatan',
            text: "Data akan terhapus secara permanen",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText : 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : '<?= url('/adm/deleteArtikel') ?>',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data : {id_artikel : id_artikel},
                    method : 'POST',
                    success:function(data){
                        if(data == "success"){
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Data berhasil dihapus',
                                showConfirmButton: false,   
                                timer: 1500
                            });
                        }
                        location.href="{{url('/adm/dashboard')}}";
                    }
                });      
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Batal',
                    text: 'Data batal dihapus',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    }
</script>
@endpush