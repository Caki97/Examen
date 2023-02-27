@if ($errors->any())  //esto muestra todos los errores seguidos
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
<br/>
@endif


<html>

<body style="background-color:aquamarine">
<fieldset style="width:15%;background-color:grey;color:white" >
<h2>INSERTAR DATOS</h2>
<form method="post" action="{{ route('almacenarPost') }}"> 
 
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" value="{{old('nombre')}}"/> 
     {!! $errors->first('name', '<small>:message</small><br>' )!!}  
  
        <label for="slug">Slug:</label>
        <input type="text" name="slug" value="{{old('slug')}}"/>
     {!! $errors->first('descripcion', '<small>:message</small><br>' )!!}  

	 <label for="cuerpo">Cuerpo:</label>
        <input type="text" name="cuerpo" value="{{old('cuerpo')}}"/>  
     {!! $errors->first('name', '<small>:message</small><br>' )!!} 
	 
	 <br><br><label for="status">Status:</label>
	 <select name="status">
       <option value="DRAFT">DRAFT</option>
       <option value="PUBLISHED">PUBLISHED</option>
     </select><br><br>
     {!! $errors->first('descripcion', '<small>:message</small><br>' )!!}  

        <label for="file">File:</label>
        <input type="text" name="file" value="{{old('file')}}"/>
     {!! $errors->first('descripcion', '<small>:message</small><br>' )!!}  
 
 

    <br><br><button type="submit">Crear</button>
</form>

</fieldset>
</body>
</html>