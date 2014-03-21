function getLang(buscar) {
   
    var lang;
    if (typeof navigator.userLanguage != "undefined") {
        lang = navigator.userLanguage.toUpperCase( );
    } else if (typeof navigator.language != "undefined") {
        lang = navigator.language.toUpperCase( );
    }
    return (lang && lang.indexOf(buscar.toUpperCase( )) == 0)

}
alert("El idioma de tu navegador es Español? "+ getLang("es"));
alert("Your navigator language is English? "+ getLang("en"));
alert("L'idioma del teu navegador és Català? "+ getLang("es-ca"));



function skDeterminarIdiomaNaveg() {
   var idiomaNavegador = new String;

   if (navigator.language){
      idiomaNavegador = navigator.language;

      // En este caso, el idioma devuelto puede contener el 
      // subcódigo de idioma (p.ej. "es-ES").
   } else {
      idiomaNavegador = navigator.browserLanguage;

      // En este caso, el idioma devuelto solo conteniene el 
      // código de idioma (p.ej. "es")
   }
   return idiomaNavegador;
}

   var i = skDeterminarIdiomaNaveg();
   alert('El idioma del navegador es \'' + i + '\'');