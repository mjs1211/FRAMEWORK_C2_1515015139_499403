<div class="from-group">
		<label class="col-sm-2 control-label" id="nama">Nama</label>
		<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="from-group">
		<label class="col-sm-2 control-label" id="nim">NIM</label>
		<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"NIM"]) !!}
		</div>
</div>

<div class="from-group">
		<label class="col-sm-2 control-label" id="alamat">Alamat</label>
		<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
</div>

<div class="from-group">
		<label class="col-sm-2 control-label" id="username">Username</label>
		<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="password">Password</label>
	<div class="col-sm-10">
	{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>
</div>