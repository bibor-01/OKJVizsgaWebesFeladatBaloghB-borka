<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <h1>Tesztkérdések</h1>
        </div>
    </x-slot>

    <body>
        <div class="form-group">
            <select class="form-control kategoria" id="kategoria" name="kategoria">
                <option class="katekoriaElem"></option>

            </select>
        </div>
        <div class="row kerdes" id="kerdes">
            <div class="col kerdesElem" id="kerdesElem">
            </div>

        </div>
        <div class="row valasz" id="valasz" >
            <div class="row valaszElem" id="valaszElem">
                <div class=" col v1">
                </div>
                <div class="col v2">
                </div>
                <div class="col v3">
                </div>
                <div class="col v4">
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
