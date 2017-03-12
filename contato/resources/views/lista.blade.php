@extends('layout')

@section('conteudo')
<div class="row">
<input type="name" placeholder="nome">
<input type="telefone" placeholder="telefone">
<input type="email" placeholder="email">
	<div class="col-md-12">
		<table border="1px">
			<thead>
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>telefone</th>
				<th>email</th>
			</tr>
			</thead>
			<tbody>
				@foreach($contatos as $contato)
				<tr>
				<td>{{$contato->id}}</td>
				<td>{{$contato->nome}}</td>
				<td>{{$contato->telefone}}</td>
				<td>{{$contato->email}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$contatos->links()}}
	</div>
</div>

@endsection