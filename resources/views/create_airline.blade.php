<div>
    <h1>Crear Aerolinea</h1>
    <form action="{{route('arilines.store')}}" method="POST"> 
        <label for="aName">Aeroline name </label><br>
        <input type ="text" id="aName" name="aName"><br>
        <label for="aCountry">Aeroline country </label><br>
        <select id="aCountry" name="aCountry">
            <option value="es">Spain</option>
            <option value="en">England</option>
        </seelct>
        <input type="submit" value="Submit">
    </form>
</div>