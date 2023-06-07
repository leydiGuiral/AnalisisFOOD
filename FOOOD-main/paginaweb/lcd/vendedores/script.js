function verDetallePedido(index) {
  const pedidos = [
    { numero: "001", fecha: "2023-04-21 10:30:00", cliente: "John Doe", estado: "Pendiente", detalles: "1 Coca Cola 3 litros. calle 5ta #23-34" },
    { numero: "002", fecha: "2023-04-20 15:45:00", cliente: "Jane Smith", estado: "Enviado", detalles: "salchipapa para 3 personas. el vallado" }
  ];
  
  const pedido = pedidos[index];
  const detallePedido = document.getElementById("detallePedido");
  const pedidoDetalles = document.getElementById("pedidoDetalles");

  pedidoDetalles.textContent = pedido.detalles;

  detallePedido.style.display = "block";
}



function editarProducto(nombre) {
  var row = document.getElementById('row-' + nombre);
  var inputs = row.getElementsByTagName('input');

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].removeAttribute('readonly');
  }

  var editarButton = row.querySelector('.editar-button');
  editarButton.style.display = 'none';

  var guardarButton = row.querySelector('.guardar-button');
  guardarButton.style.display = 'inline-block';
}

function guardarProducto(nombre) {
  var row = document.getElementById('row-' + nombre);
  var inputs = row.getElementsByTagName('input');

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute('readonly', 'readonly');
  }

  var editarButton = row.querySelector('.editar-button');
  editarButton.style.display = 'inline-block';

  var guardarButton = row.querySelector('.guardar-button');
  guardarButton.style.display = 'none';

  // Actualizar los valores en el almacenamiento local
  var producto = localStorage.getItem(nombre);
  var values = producto.split(',');
  values[3] = inputs[3].value; // Actualizar la descripción con el nuevo valor
  localStorage.setItem(nombre, values.join(','));
}

function eliminarProducto(nombre) {
  var confirmacion = confirm("¿Estás seguro de eliminar este producto?");

  if (confirmacion) {
    var row = document.getElementById('row-' + nombre);
    row.parentNode.removeChild(row);

    // Eliminar del almacenamiento local
    localStorage.removeItem(nombre);
  }
}

function agregarProducto() {
  var nombre = prompt("Ingrese el nombre del producto:");
  var precio;
  var existencias;

  do {
    precio = prompt("Ingrese el precio del producto:");
  } while (isNaN(precio));

  do {
    existencias = prompt("Ingrese la cantidad de existencias del producto:");
  } while (isNaN(existencias));

  var descripcion = prompt("Ingrese la descripción del producto:");

  var table = document.getElementById("products-table");
  var newRow = table.insertRow();

  // Asignar un identificador único a la fila
  newRow.id = 'row-' + nombre;

  // Guardar el producto como una cadena concatenada en el almacenamiento local
  var producto = `${nombre},${precio},${existencias},${descripcion}`;
  localStorage.setItem(nombre, producto);

  var cell1 = newRow.insertCell();
  var cell2 = newRow.insertCell();
  var cell3 = newRow.insertCell();
  var cell4 = newRow.insertCell();
  var cell5 = newRow.insertCell();

  cell1.innerHTML = '<input id="input-' + nombre + '" type="text" value="' + nombre + '" readonly>';
  cell2.innerHTML = '<input id="input-precio-' + nombre + '" type="text" value="' + precio + '" readonly>';
  cell3.innerHTML = '<input id="input-existencias-' + nombre + '" type="text" value="' + existencias + '" readonly>';
  cell4.innerHTML = '<input id="input-descripcion-' + nombre + '" type="text" value="' + descripcion + '" readonly>';
  cell5.innerHTML = `
    <div class="actions">
      <button onclick="editarProducto('${nombre}')">Editar</button>
      <button onclick="eliminarProducto('${nombre}')">Eliminar</button>
    </div>
  `;
}



function verDetallePedido(index) {
  const pedidos = [
    { numero: "001", fecha: "2023-04-21 10:30:00", cliente: "John Doe", estado: "Pendiente", detalles: "Hamburguesa sin cebolla. El vallado" },
    { numero: "002", fecha: "2023-04-20 15:45:00", cliente: "Jane Smith", estado: "Enviado", detalles: "5 Empanadas con gaseosa. Calle 5ta #23-12" }
  ];
  
  const pedido = pedidos[index];
  const detallePedido = document.getElementById("detallePedido");
  const pedidoDetalles = document.getElementById("pedidoDetalles");

  pedidoDetalles.textContent = pedido.detalles;

  detallePedido.style.display = "block";
}

function cerrarVentana() {
  const detallePedido = document.getElementById("detallePedido");
  detallePedido.style.display = "none";
}


function borrarLocalStorage() {
  var confirmacion = confirm("¿Estás seguro de borrar todos los productos del Menu?");

  if (confirmacion) {
    localStorage.clear();
    location.reload(); // Recargar la página para reflejar los cambios en el menú
  }
}
