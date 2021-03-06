
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <script>
        

        class usr {
            constructor (name, email, id) {
                this.name = name;
                this.email = email;
                this.id = id;
                this.create();
            }

            create() {
                var usr = this;
                var tableRow = document.createElement("tr");
                var tableBody = document.getElementById("bodyID");

                var td1 = document.createElement("td");
                var td2 = document.createElement("td");
                var td3 = document.createElement("td");
                var p1 = document.createElement("p");
                var p2 = document.createElement("p");

                p1.innerText = usr.name;
                p2.innerText = usr.email;

                var a1 = document.createElement("a");
                var a2 = document.createElement("a");
                var a3 = document.createElement("a");
                var in1 = document.createElement("input");
                var in2 = document.createElement("input");
                var in3 = document.createElement("input");
                in1.type = "hidden";
                in1.value = usr.id;
                in1.hidden = true;
                in2.placeholder = usr.name;
                in2.hidden = true;
                in3.placeholder = usr.email;
                in3.hidden = true;
                a1.innerText="Szerkeszt??s";
                a2.innerText="Ment??s";
                a2.hidden = true;
                a3.innerText="T??rl??s";
                a3.href  = "/delusr?id="+usr.id;
                a1.onclick = () => {
                    p1.hidden = true;
                    p2.hidden = true;
                    in1.hidden = false;
                    in2.hidden = false;
                    in3.hidden = false;
                    a2.hidden = false;
                    a1.hidden = true;
                }
                a2.onclick = function () {
                    a2.href = "/editusr?id="+usr.id+"&name="+in2.value+"&email="+in3.value;
                }

                td1.appendChild(p1);
                td2.appendChild(p2);

                td1.appendChild(in1);
                td1.appendChild(in2);
                td2.appendChild(in3);
                
                td3.appendChild(a1);
                td3.appendChild(a2);
                td3.appendChild(a3);

                tableRow.appendChild(td1);
                tableRow.appendChild(td2);
                tableRow.appendChild(td3);
                tableBody.appendChild(tableRow);
                /*

                tableRow.innerHTML = `
                <form action="editusr" method="POST">
                <td id="tdname">
                    `+usr.name+`
                </td>
                <td id="tdmail">
                    `+usr.email+`
                </td>
                <td>
                        <input type="button" value="M??doss??t??s" id="modify">
                        <p id="savep"><a id="save" hidden>Ment??s</a></p>
                        <input type="button" value="T??rl??s">
                </td>
                </form>
                `;
                
                tableBodyId.appendChild(tableRow);

                var modify = document.getElementById("modify");
                modify.onclick = function() {
                    var tdname = document.getElementById("tdname");
                    tdname.innerHTML = `
                        <input type="hidden" value="`+usr.id+`" name="idin">
                        <input type="text" placeholder="`+usr.name+`" id="namein">
                    `;
                    var tdmail = document.getElementById("tdmail");
                    tdmail.innerHTML = `
                        <input type="text" placeholder="`+usr.email+`" id="mailin">
                    `;
                    var a = document.createElement("a");
                    a.href = "";
                    function datachanged() {
                        console.log("V??ltozott!")
                        document.getElementById("savep").innerHTML = `<a href="editusr?id=`+usr.id+`&name=`+document.getElementById("namein").value+`&email=`+document.getElementById("mailin").value+`" id="save">Ment??s</a>`;
                    }
                    document.getElementById("namein").onkeypress = function () {datachanged();}
                    document.getElementById("mailin").onkeypress = function () {datachanged();}
                    document.getElementById("modify").hidden = true;
                    document.getElementById("save").hidden = false;
                }

                */

                /*
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
                    b2.value = "Ment??s";
                    tableRow.innerHTML = "<td><input type=\"hidden\" value=\""+usr.id+"\"><input type=\"text\" placeholder=\""+usr.name+"\" name=\"name\"></td><td><input type=\"text\" placeholder=\""+usr.email+"\" name=\"email\"></td>";
                    b1.hidden = true;
                    f1.appendChild(b2);
                    d1.appendChild(f1);
                    tableRow.appendChild(f1);
                };
                var bd = document.createElement("input");
                bd.type = "button";
                bd.value = "T??rl??s";
                f1.appendChild(b1);
                f1.appendChild(bd);
                d1.appendChild(f1);
                tableRow.appendChild(d1);
                tableBodyId.appendChild(tableRow);
                */
            };
        }
    </script>
<?php if(auth()->guard()->check()): ?> 
    <div id="list">
        <div class="d-flex justify-center">
            <div class="table-container">
                <h3>Felhaszn??l??k list??ja:</h6>
                <table class="table table-costumized">
                    <thead>
                        <th>n??v</th>
                        <th>e-mail</th>
                        <th></th>
                    </thead>
                    <tbody id="bodyID">
                            <?php
                                foreach (DB::table("users")->get() as $key => $data) {
                                    if (Auth::user()->name != $data->name) {
                                        echo "<script>new usr(\"$data->name\", \"$data->email\", $data->id);</script>";
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
<?php endif; ?>
                
            
       
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/Example-app/resources/views/admin.blade.php ENDPATH**/ ?>