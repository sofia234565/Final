Formulario de Emergencia - Documentación

Descripción
Este formulario web fue desarrollado para recopilar información relevante en situaciones de emergencia, ya sea para personas naturales o empresas. El formulario abarca detalles sobre el desastre natural, los afectados y la confirmación de la emergencia.

Estructura del Proyecto
index.html: Contiene la estructura HTML del formulario con secciones específicas para Persona Natural y Empresa.

style.css: Proporciona estilos CSS para mejorar la apariencia del formulario.

script.js: Incluye scripts JavaScript para el manejo de eventos, validaciones y funciones relacionadas con el formulario.

Uso del Formulario
Abre index.html en un navegador web para acceder al formulario.

Selecciona el tipo de solicitud (Persona Natural o Empresa) haciendo clic en los botones correspondientes.

Completa los campos requeridos en cada sección del formulario.

Para el campo "Nombres y Apellidos" y similares, se permite separar los nombres por punto y coma (;) o saltos de línea.

Para el campo "RUC" se permite solo 11 caracteres alfanuméricos.

Verifica los datos y marca la casilla de confirmación antes de enviar.

Haz clic en el botón "Enviar" para procesar la información.

Validaciones
Nombres y Apellidos: Solo se aceptan letras, tildes, guiones y espacios. Separar nombres por punto y coma (;) o saltos de línea.

DNI: Debe contener exactamente 8 dígitos numéricos.

Teléfono: Debe contener exactamente 9 dígitos numéricos.

RUC (Empresa): Debe contener exactamente 11 caracteres alfanuméricos.

Nombre del Contacto (Empresa): Solo se aceptan letras, tildes, guiones y espacios. Máximo 40 caracteres.

Teléfono del Contacto (Empresa): Debe contener números y tener un máximo de 15 dígitos.

Funciones Personalizadas
validarNombres(nombres): Valida que los nombres y apellidos cumplan con las restricciones.

validarDNI(dni): Valida el formato del DNI.

validarTelefono(telefono): Valida el formato del número de teléfono.

validarRUC(ruc): Valida el formato del RUC.

validarNombreContacto(nombreContacto): Valida el formato del nombre del contacto en la sección de Empresa.

validarTelefonoContacto(telefonoContacto): Valida el formato del número de teléfono del contacto en la sección de Empresa.

Personalización
Puedes personalizar los estilos en el archivo style.css y modificar las funciones de validación en script.js según los requisitos específicos de tu aplicación.


#  
README - Sistema de Solicitud de Ayuda por Fenómenos Naturales
Este repositorio contiene el código fuente de un sistema de solicitud de ayuda diseñado para manejar solicitudes de ayuda tanto de personas naturales como de empresas en situaciones de emergencia causadas por fenómenos naturales.

Contenido del Repositorio
El sistema está dividido en dos secciones principales: "Persona Natural" y "Empresa". Cada sección tiene su propio formulario y funcionalidad específica.

1. Solicitar Ayuda
Al hacer clic en el botón "Solicitar Ayuda", se abrirá una ventana flotante que permite al usuario seleccionar entre "Persona Natural" y "Empresa".

La ventana flotante es activada por la función mostrarVentana() y gestionada mediante JavaScript y CSS.

2. Formulario para Persona Natural
El formulario para persona natural recopila información personal relevante, como nombres, DNI, teléfono, tipo de desastre, fecha y hora del desastre, ubicación y descripción de la situación.

Se proporciona un campo para indicar el grado de urgencia y una confirmación de la veracidad de la información.

La función validarFormularioPersona() se encarga de validar los campos del formulario de persona natural.

Al hacer clic en el botón "Enviar", se llama a la función enviarFormulario('persona'), que realiza la validación final y puede enviar los datos al servidor.

3. Formulario para Empresa
El formulario para empresas recopila información específica, como nombre de la empresa, RUC, información de contacto, tipo de desastre y confirmación de la información proporcionada.

Además, se permite la verificación de trabajadores mediante el botón "Verificar Trabajadores".

La función validarFormularioEmpresa() valida los campos del formulario de la empresa.

Al hacer clic en el botón "Enviar", se llama a la función enviarFormulario('empresa') para validar y procesar los datos del formulario.

Instrucciones de Uso
Clone o descargue este repositorio en su máquina local.

Abra el archivo index.html en un navegador web.

Haga clic en el botón "Solicitar Ayuda" para iniciar el proceso.

Seleccione "Persona Natural" o "Empresa" en la ventana flotante.

Complete los campos del formulario correspondiente.

Haga clic en "Enviar" para enviar la solicitud.

Personalización y Mejoras Futuras
Este sistema puede ser personalizado y mejorado según las necesidades específicas del usuario. Algunas sugerencias incluyen:

Integración con Servidor: Implemente lógica del lado del servidor para manejar los datos enviados por los formularios.

Mejoras en la Interfaz de Usuario: Añada elementos visuales y de diseño para mejorar la experiencia del usuario.

Mejoras en la Validación: Añada más validaciones según sea necesario para garantizar la integridad de los datos.

Manejo de Errores: Implemente un manejo más robusto de errores y mensajes de retroalimentación para el usuario.

