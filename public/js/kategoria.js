$(function(){
    let ajax = new AjaxHivas();
    let eleresiUt = "/api/kategoria";

    function kategoriaLista(tomb) {
        const szuloElem = $(".kategoria");
        const sablonElem = $(".katekoriaElem");

        tomb.forEach(function (adat) {
            /* console.log(adat); */
            let ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujKategoria = new Kategoria(ujElem, adat);

        });
        sablonElem.remove();
    }
    ajax.getAjax(eleresiUt, kategoriaLista);
});
