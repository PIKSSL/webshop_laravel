<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("brand");
            $table->string("model");
            $table->string("switchType");
            $table->integer("inStock")->default(0);
            $table->integer("price");
            $table->string("img");
            $table->timestamps();
        });

        Product::create(['brand'=>'Redragon','model'=>'K616','switchType'=>'Red','inStock'=>3,'price'=>22400,'img'=>'./imgs/1.jpg']);
        Product::create(['brand'=>'Logitech','model'=>'LG150','switchType'=>'Blue','inStock'=>1,'price'=>32400,'img'=>'./imgs/2.jpg']);
        Product::create(['brand'=>'Razer','model'=>'RZ9540','switchType'=>'KHAILB White','inStock'=>4,'price'=>62400,'img'=>'./imgs/3.jpg']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
