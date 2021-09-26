Indicaciones para agregar recetas:
    1 - En la base de datos PHP My Admin hay que escribir: 

        "INSERT INTO 'recetas' ('nombre_receta', 'imagen_receta', 'info_card', 'link_receta', 'id__receta', 'ingredientes__receta') VALUES ('$nombre__receta', '$imagen__receta','$info__card', '$link__receta', '$id__receta', '$ingredientes__receta') ";

    NOTA: Los ingredientes pueden ir con o sin tildes, van en plural y, si corresponde, hay que aclarar si contiene trigo, avena, cebada, centeno.

    2 - En info_recetas.php hay que crear el objeto 

        $otra = new Receta ("Otra de", "Otra", "??? minutos", "? horas", "recetaEscrita_nombreReceta.jpg");

    NOTA: Los objetos se usan en las páginas de recetas.

    3 - Crear la página correspondiente a la receta agregada según el modelo y cambiar las referencias de los objetos.