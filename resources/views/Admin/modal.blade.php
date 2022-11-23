<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel"> <i class="fas fa-plus-circle"></i> Tambah Artikel </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/adm/simpanArtikel')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                    <center>
                        <div class="row form-group">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control" required name="judul" placeholder="Masukkan Judul Artikel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <input type="date" class="form-control" required name="tanggal_terbit">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <input type="time" class="form-control" required name="waktu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <textarea class="form-control" style="resize: none" id="isi" name="isi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="cmd" value="addArtikel"> <i class="fas fa-save"></i> Tambah </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"> <i class="fas fa-pencil-alt"></i> Edit Artikel </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/adm/editArtikel')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                    <input type="hidden" name="id_artikel" id="id_artikel">
                    <center>
                    <div class="row form-group">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="date" class="form-control" name="tanggal_terbit" id="tanggal_terbit">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="time" class="form-control" name="waktu" id="waktu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <textarea class="form-control" style="height:300px;resize: none" id="isiArtikel" name="isi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="cmd" value="editArtikel"> <i class="fas fa-pencil-alt"></i> Ubah </button>
                </div>
            </form>
         </div>
    </div>
</div>
    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
      	<div class="modal-dialog modal-xl" role="document">
	         <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="viewModalLabel"> <i class="fas fa-eye"></i> Lihat Artikel </h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	<span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	            	<h1> <center> INI ADALAH ISI ARTIKEL </center> </h1>
	            </div>
	        </div>
        </div>
    </div>