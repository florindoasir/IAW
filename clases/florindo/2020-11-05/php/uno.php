<html>
  <body>
    <form action="dos.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="tipo_formulario" value="Datos personales">
      Nombre: <input type="text" name="nombre"></br>

      Edad: <input type="number" name="edad"></br>

      Radio: <input type="radio" name="sexo" value="M" checked> M
      <input type="radio"  name="sexo" value="F"> F</br>

      Instalaciones: <input type="checkbox" name="extra[]" value="garaje" > Garaje
      <input type="checkbox"  name="extra[]" value="jardin" checked> Jardin
      <input type="checkbox"  name="extra[]" value="piscina"> Piscina</br>

      Adjuntar imagen <input type="file" name="fichero"></br>

      Select
      <select name="ciudad">
        <option value="34004">Palencia</option>
        <option value="34005">Burgos</option>
        <option value="34006">Valladolid</option>
        <option value="34007">Soria</option>
      </select></br>

      Idioma
      <select name="idioma[]" multiple>
        <option>Inglés</option>
        <option>Francés</option>
        <option>Español</option>
        <option>Holandés</option>
      </select></br>

      Textarea
      <textarea name="comentarios" cols="40" rows="6">
      </textarea></br>

      <input type="submit" value="Enviar">
    </form>
  </body>
</html>