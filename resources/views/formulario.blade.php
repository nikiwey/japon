
<form action="{{url('imprimir')}}" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="text" name="flash">

	<button type="submit">Enviar</button>

</form>
