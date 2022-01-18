<?php
    use Illuminate\Support\Facades\Route;
    if (Auth::user()->admin == 1){
        DB::table("users")->where('id', $_GET["id"])->update(['name' => $_GET["name"], 'email' => $_GET["email"]]);
    } else {
        echo "Nincs jogosultságod ehhez!";
    }
    echo $_SERVER["HTTP_REFERER"];
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
?>