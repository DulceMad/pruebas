const tabla = document.querySelector('#lista-productos tbody');

function CargarProductos(){
    fetch('api.json')
    .then(respuesta => respuesta.json())
    .then(productos => {
        productos.forEach(producto => {
            const row = document.createElement('tr');
            row.innerHTML += `
            <td>${producto.SKU}</td>
            <td>${producto.NombreProducto}</td>
            <td>${producto.precio}</td>
            <td>${producto.stock}</td>
            <td>${producto.descripcion}</td>
            <td><img src=" ${producto.imagen}" style="width: 100px; height: 100px;"></td>
            <td>
                        
                            <a href="#.html">
                                <button class="btn btn-danger" type="submit" style="margin-bottom: 10px;">Borrar</button>
                            </a>
                            <a href="ActualizarProducto.html">
                                <button class="btn btn-info" type="submit">Editar</button>
                            </a>
                    </td>
            `;
            tabla.appendChild(row);
        });
    })
}

CargarProductos();