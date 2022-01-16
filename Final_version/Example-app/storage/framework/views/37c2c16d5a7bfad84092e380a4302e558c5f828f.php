
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
                var form = document.createElement("form");
                var tableBodyId = document.getElementById("bodyID");

                tableRow.innerHTML = `
                <form action="editusr" method="POST">
                <td id="tdname">
                    `+usr.name+`
                </td>
                <td id="tdmail">
                    `+usr.email+`
                </td>
                <td>
                        <input type="button" value="Módossítás" id="modify">
                        <input type="button" value="Törlés">
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
                    modify.after(`<a href="editusr?id=`+usr.id+`&name=`+document.getElementById("namein").value+`&email=`+document.getElementById("mailin")+`" id="save" hidden>Mentés</a>`);
                    document.getElementById("modify").hidden = true;
                    document.getElementById("save").hidden = false;
                }


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
                    b2.value = "Mentés";
                    tableRow.innerHTML = "<td><input type=\"hidden\" value=\""+usr.id+"\"><input type=\"text\" placeholder=\""+usr.name+"\" name=\"name\"></td><td><input type=\"text\" placeholder=\""+usr.email+"\" name=\"email\"></td>";
                    b1.hidden = true;
                    f1.appendChild(b2);
                    d1.appendChild(f1);
                    tableRow.appendChild(f1);
                };
                var bd = document.createElement("input");
                bd.type = "button";
                bd.value = "Törlés";
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
<?php endif; ?><?php /**PATH C:\ujxampp\htdocs\cms\example-appp\resources\views/admin.blade.php ENDPATH**/ ?>