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
           {{--  <div class="col kerdesElem" id="">
            </div> --}}
            <div class="row valaszElem">
                <div class=" col kerdes" style="background-color: grey">
                </div>
                <div class="w-100"></div>
                <div class="col v1" id="valasz">
                </div>
                <div class="col v2" id="valasz">
                </div>
                <div class="w-100"></div>
                <div class="col v3" id="valasz">
                </div>
                <div class="col v4" id="valasz">
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
