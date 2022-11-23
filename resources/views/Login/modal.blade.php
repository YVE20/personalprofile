<!-- Register -->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
			    <div class="modal-header">
			        <h5 class="modal-title" id="registerModalLabel"> Daftar Akun <i class="fas fa-user-alt"></i> </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
			    <form action="{{url('/checkAuth')}}" method="POST" enctype="multipart/form-data">
					@csrf
			    	<div class="modal-body">
						<input type="hidden" name="user_id" id="user_id">
			    		<center>
							<div class="m-2">
								<input type="text" name="username" id="username" required="" class="form-control" placeholder="Username"> 
							</div>
							<div class="m-2">
								<input type="password" name="password" id="password" required class="form-control" placeholder="***********"> 
							</div>
							<div class="m-2">
								<input type="text" name="nama" id="nama" required class="form-control" placeholder="Nama Lengkap"> 
							</div>
							<div class="m-2">
								<input type="text" name="tempat_lahir" id="tempat_lahir" required class="form-control" placeholder="Tempat Lahir"> 
							</div>
							<div class="m-2 float-left">
								<input type="date" name="tanggal_lahir" id="tanggal_lahir" required class="form-control"> 
							</div>
							<div class="m-2 mt-4">
								<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki"> Laki-laki
								<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan"> Perempuan
							</div>
							<div class="m-2">
								<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" style="resize: none;"></textarea>
							</div>
						</center>
			    	</div>
				    <div class="modal-footer">
						<button type="button" class="btn btn-danger" onclick="loginGoogle()" name="cmd" value="GOOGLE"> <i class="fab fa-google"></i> Google </button>
				    	<button type="submit" class="btn btn-primary" name="cmd" value="REGISTER"> <i class="fas fa-save"></i> Register </button>
				    </div>
			    </form>
		    </div>
	  	</div>
	</div>
	<!-- Lengkapin Identitas -->
	<div class="modal fade" id="lengkapiDataModal" tabindex="-1" role="dialog" aria-labelledby="lengkapiDataModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
			    <div class="modal-header">
			        <h5 class="modal-title" id="lengkapiDataModalLabel"> Daftar Akun <i class="fas fa-user-alt"></i> </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
			    <form action="{{url('/checkAuth')}}" method="POST" id="updatePOST" enctype="multipart/form-data">
					@csrf
			    	<div class="modal-body">
						<input type="hidden" name="user_id_update" id="user_id_update">
			    		<center>
							<div class="m-2">
								<input type="text" name="username_update" id="username_update" required="" class="form-control" placeholder="Username"> 
							</div>
							<div class="m-2">
								<input type="password" name="password_update" id="password_update" required class="form-control" placeholder="***********"> 
							</div>
							<div class="m-2">
								<input type="text" name="nama_update" id="nama_update" required class="form-control" placeholder="Nama Lengkap"> 
							</div>
							<div class="m-2">
								<input type="text" name="tempat_lahir_update" id="tempat_lahir_update" required class="form-control" placeholder="Tempat Lahir"> 
							</div>
							<div class="m-2 float-left">
								<input type="date" name="tanggal_lahir_update" id="tanggal_lahir_update" required class="form-control"> 
							</div>
							<div class="m-2 mt-4">
								<input type="radio" id="jenis_kelamin_update" name="jenis_kelamin_update" value="Laki-laki"> Laki-laki
								<input type="radio" id="jenis_kelamin_update" name="jenis_kelamin_update" value="Perempuan"> Perempuan
							</div>
							<div class="m-2">
								<textarea class="form-control" id="alamat_update" name="alamat_update" placeholder="Alamat" style="resize: none;"></textarea>
							</div>
						</center>
			    	</div>
				    <div class="modal-footer">
				    	<button type="button" onclick="update()" class="btn btn-primary" id="buttonUpdatePOST" name="cmd" value="UPDATE"> <i class="fas fa-save"></i> Update </button>
				    </div>
			    </form>
		    </div>
	  	</div>
	</div>