@extends('layout')

@section('conteudo')
@if(isset($salvou))
<h5>Salvou</h5>
@endif
<form method="post" action="/">
{{csrf_field() }}

<div class="row">
	<div class="col-md-6"></div>
	<div class="form-control">
		<label>Nome:</label>
		<input type="text" name="nome">
	</div>
</div>
<div class="row">
	<div class="col-md-6"></div>
	<div class="form-control">
		<label>Telefone:</label>
		<input type="text" name="telefone">
	</div>
</div>
<div class="row">
	<div class="col-md-6"></div>
	<div class="form-control">
		<label>Email:</label>
		<input type="text" name="email">
	</div>
</div>
<div class="col-md-6">
	<input type="submit" class="button btn-primary">
</div>
</form>