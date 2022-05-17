$(function(){
    let ajax = new AjaxHivas();
    let eleresiUt = "/api/tesztek";

    function valaszLista(tomb) {
        const szuloElem = $(".valasz");
        const sablonElem = $(".valaszElem");

        tomb.forEach(function (adat) {
            let ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujValasz = new Valasz(ujElem, adat);

        });
        sablonElem.remove();
    }
    ajax.getAjax(eleresiUt, valaszLista);
});
