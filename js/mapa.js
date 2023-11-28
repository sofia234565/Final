var marker;

// Llena dinámicamente las opciones de provincia según el departamento seleccionado
$("#departamento").change(function() {
    var departamentoSeleccionado = $(this).val();
    var provincias = departamentos[departamentoSeleccionado].provincias;

    // Limpia el select de provincias
    $("#provincia").empty();
    $("#distrito").empty(); // Limpia también el select de distritos al cambiar el departamento

    // Llena las opciones de provincia
    $.each(provincias, function(provincia, distritos) {
        $("#provincia").append('<option value="' + provincia + '">' + provincia + '</option>');
    });

    // Dispara el evento change para la provincia
    $("#provincia").trigger("change");
});

// Llena dinámicamente las opciones de distrito según la provincia seleccionada
$("#provincia").change(function() {
    var departamentoSeleccionado = $("#departamento").val();
    var provinciaSeleccionada = $(this).val();
    var distritos = departamentos[departamentoSeleccionado].provincias[provinciaSeleccionada];

    // Limpia el select de distritos
    $("#distrito").empty();

    // Llena las opciones de distrito
    $.each(distritos, function(distrito, coordenadas) {
        $("#distrito").append('<option value="' + distrito + '">' + distrito + '</option>');
    });
});

// Función para mostrar la ubicación en el mapa
function mostrarUbicacion() {
    var departamento = $("#departamento").val();
    var provincia = $("#provincia").val();
    var distrito = $("#distrito").val();
    var referencia = $("#referencia").val();

    // Obtén las coordenadas del distrito seleccionado
    var coordenadas = departamentos[departamento].provincias[provincia][distrito];

    // Elimina el marcador existente, si hay alguno
    if (marker) {
        map.removeLayer(marker);
    }

    // Muestra un nuevo marcador en el mapa
    marker = L.marker(coordenadas).addTo(map)
        .bindPopup(`<b>${departamento}, ${provincia}, ${distrito}</b><br>${referencia}`)
        .openPopup();

    // Centra el mapa en la ubicación
    map.panTo(coordenadas);
}