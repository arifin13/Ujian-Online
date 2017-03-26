<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Aplikasi Ujian Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="col-md-4">
		<form action="" method="post" name="fl" id="f_login">
			<div class="panel panel-default top150">
				<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i><b> Silakan login</b></h4></div>
					<div class="panel-body">
						<div id="konfirmasi"></div>
							<div class="input-group">
								<span class="input-group-addon">@</span>
									<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
							</div> <!-- /field -->
							<div class="input-group top15">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
							</div> <!-- /password --><br>
							<div class="login-actions">
								<button class="btn btn-primary btn-dafault btn-large col-lg-12 top15"><i>Login</i></button>
							</div> <!-- .actions -->
			</div>
		</form>
	</div>
</div>

<div class="container">
	<div class="col-md-4">
	<form action="" method="post" name="fl" id="f_login">
		<div class="panel panel-default top150">
			<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i><b> Silakan Daftar</b></h4></div>
				<h4><center><br><i class="glyphicon glyphicon-user"></i> <br><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i>
					 <br><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-user"></i></center></h4>
				<div class="panel-body">
					<div class="login-actions"><a class="btn btn-primary btn-dafault btn-large col-lg-12 top15" href="#" onclick="return m_siswa_e(0);"><i>Mahasiswa</i></a></div> <!-- .actions --><br><br>
				</div>
		</div>
	</form>
</div>

<div class="container">
	<div class="col-md-4">
	<form action="" method="post" name="fl" id="f_login">
		<div class="panel panel-default top150">
			<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i><b> Silakan Daftar</b></h4></div>
				<center><h2><br><i class="glyphicon glyphicon-user"></i></h2></center>
				<div class="panel-body">
					<div class="login-actions"><a class="btn btn-primary btn-dafault btn-large col-lg-12 top15" href="#" onclick="return m_guru_e(0);"><i>Dosen</i></a></div> <!-- .actions --><br><br>
				</div>
		</div>
	</form>
	</div>
</div>
</div>

<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 id="myModalLabel">Form Pendaftaran Mahasiswa</h4>
			</div>
			<div class="modal-body">
				<form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
					<input type="hidden" name="id" id="id" value="0">
						<table class="table table-form">
							<tr><td style="width: 25%" >Nama</td><td style="width: 75%">
							<input type="text" class="form-control" name="nama" id="nama" required value="" placeholder="Nama Lengkap"></td></tr>
							<tr><td style="width: 25%">NIM</td><td style="width: 75%">
							<input type="text" class="form-control" name="nim" id="nim" required value="" placeholder="NIM"></td></tr>
							<tr><td style="width: 25%">Program</td><td style="width: 75%">
							<input type="text" class="form-control" name="jurusan" id="jurusan" required value="" placeholder="Program"></td></tr>
						</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Daftar</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
			</div>
				</form>
		</div>
	</div>
</div>


<div class="modal fade" id="m_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
   	<div class="modal-content">
      	<div class="modal-header">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      			<h4 id="myModalLabel">Form Pendaftaran Dosen</h4>
      	</div>
      	<div class="modal-body">
         	<form name="f_guru" id="f_guru" onsubmit="return m_guru_s();">
            	<input type="hidden" name="id" id="id" value="0">
            		<table class="table table-form">
               		<tr><td style="width: 25%">Nama</td><td style="width: 75%">
               		<input type="text" class="form-control" name="nama" id="nama" required value="" placeholder="Nama Lengkap"></td></tr>
            		</table>
      	</div>
      	<div class="modal-footer">
      		<button class="btn btn-primary">Daftar</button>
      		<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
      	</div>
      		</form>
   	</div>
	</div>
</div>


<br>
<div class="ctr">Copyright &copy; 2017 Administrator || <a href="<?php echo base_url(); ?>adm">Aplikasi Ujian Online</a>.</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script>

<script type="text/javascript">
	$("#f_login").submit(function(event) {
		event.preventDefault();
		var data 	= $('#f_login').serialize();
		$("#konfirmasi").html("<div class='alert alert-info'><i class='icon icon-spinner icon-spin'></i> Checking...</div>")
		$.ajax({
			type: "POST",
			data: data,
			url: "<?php echo base_URL(); ?>adm/act_login",
			success: function(r) {
				if (r.log.status == 0) {
					$("#konfirmasi").html("<div class='alert alert-danger'>"+r.log.keterangan+"</div>");
				} else {
					$("#konfirmasi").html("<div class='alert alert-success'>"+r.log.keterangan+"</div>");
					window.location.assign("<?php echo base_url(); ?>adm");
				}
			}
		});
	});
</script>
</body>
</html>
