
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <script>
        

        class usr {
            constructor (name, email) {
                this.name = name;
                this.email = email;
                this.create();
            }

            create() {
                var usr = this;
                var le = document.getElementById("list");
                var d1 = document.createElement("div");
                var tableRow = document.createElement("tr")
                d1.class = "d-flex text-muted pt-3";
                var tableBodyId = document.getElementById("bodyID")
                var f1 = document.createElement("form");
                f1.action = "editusr";
                tableRow.innerHTML = "<td>"+this.name+"</td><td>"+this.email+"</td>";
                var b1 = document.createElement("input");
                b1.type = "button";
                b1.value = "Szerkeszt";
                b1.onclick = function() {
                    var i1 = document.createElement("input");
                    var i2 = document.createElement("input");
                    i1.type = "text";
                    i1.placeholder = usr.name;
                    i1.name = "name";
                    i2.type = "text";
                    i2.placeholder = usr.email;
                    i2.name = "email"
                    var b2 = document.createElement("input");
                    b2.type = "submit";
                    b2.value = "Mentés";

                    tableRow.innerHTML = "<td>";

                    b1.hidden = true;
                    p1.appendChild(b2);
                };

                var b2 = document.createElement("input");
                b2.type = "button";
                b2.value = "Törlés";

                f1.appendChild(b1);
                f1.appendChild(b2);
                d1.appendChild(f1);
                tableRow.appendChild(d1);
                tableBodyId.appendChild(tableRow);
            };
        }
    </script>
@auth 
    <div id="list">
        <div class="d-flex justify-center">
            <div class="table-container">
                <h3>Felhasználók listája:</h6>
                <table class="table table-costumized">
                    <thead>
                        <th>név</th>
                        <th>e-mail</th>
                        <th></th>
                    </thead>
                    <tbody id="bodyID">
                            <?php
                                foreach (DB::table("users")->get() as $key => $data) {
                                    if (Auth::user()->name != $data->name) {
                                        echo "<script>new usr(\"$data->name\", \"$data->email\");</script>";
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endauth
                
            
       
    
</x-app-layout>