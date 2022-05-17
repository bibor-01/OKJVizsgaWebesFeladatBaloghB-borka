class TesztKerdes {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;
        this.elem.html(this.adat.kerdes);
        this.elem.val(this.adat.id);
    }
}
