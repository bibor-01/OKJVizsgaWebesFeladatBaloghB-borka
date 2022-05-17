$(function(){
    let ajax = new AjaxHivas();
    let eleresiUt = "/api/tesztek";

    function tesztKerdesLista(tomb) {
        const szuloElem = $(".kerdes");
        const sablonElem = $(".kerdesElem");

        tomb.forEach(function (adat) {
            let ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujTesztKerdes = new TesztKerdes(ujElem, adat);

        });
        sablonElem.remove();
    }
    ajax.getAjax(eleresiUt, tesztKerdesLista);
});
