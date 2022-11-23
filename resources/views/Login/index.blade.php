<!DOCTYPE html>
<html>
<head>
	<title> YVE20 | LOGIN </title>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/fontawesome.css/')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/sweetalert2.min.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/x-icon" href="{{asset('/img/icon.png')}}">
</head>
<body>
	<center>
		<div class="card col-lg-6 mt-3">
			<div class="card-body">
				<h3> LOGIN </h3> <hr>
				<form action="{{url('checkAuth')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="col-lg-6 m-2">
						<input type="text" name="username" required="" class="form-control" placeholder="Username"> 
					</div>
					<div class="col-lg-6 m-2">
						<input type="password" name="password" required class="form-control" placeholder="***********"> 
					</div>
					<div class="col-lg-6 m-2">
						<button type="submit" class="btn btn-primary col-lg-12" name="cmd" value="LOGIN"> <i class="fas fa-sign-in-alt"></i> LOGIN  </button> <br>
					</div>
					<div class="col-lg-6">
						<font style="float:left"> Belum ada akun ? <a href="javascript:void(0)" data-toggle="modal" data-target="#registerModal"> Klik disini</a> </font>
					</div>
				</form>
		  	</div>
			<input type="hidden" value="{{$user_id}}" id="user_id">
		</div>
	</center>
@include('Login.modal')
<script type="text/javascript" src="{{asset('/js/font-awesome.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery-3.5.1.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.tiny.cloud/1/drzndcs7x99r8cewem7nspuqoj8oakvdc6b38dmtrikywtub/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
	@if($user_id != "")
		$('#lengkapiDataModal').modal('show');
		$.ajax({
            url : '<?= url('/isiRegisterAuth') ?>',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			data : {user_id : $('#user_id').val()},
            method : 'POST',
			dataType : 'JSON',
            success:function(data){
				$('#username_update').val(data.username);
				$('#nama_update').val(data.nama);
				$('#user_id_update').val(data.id);
            }
        });
	@endif
    @if(session()->has('isSuccess'))
        Swal.fire({
            icon: '{{session()->has("icon") ? session("icon") : "success"}}',
            title: '{{session("judul_alert")}}',
            text : '{{session("status")}}',
            showConfirmButton: false,
            timer: 1500
        })
    @endif 
	function loginGoogle(){
		location.href="<?= url('/loginGoogle') ?>";
	}
</script>
</body>
</html>