
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('product_code',255)->unique();
            $table->integer('providers_id')->unsigned();
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->integer('categories_id');//Crear en phpMyAdmin
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->string('product_name')->unique(); 
            $table->string('quatity');
            $table->string('purchase_price');
            $table->string('discout');
            $table->string('reorder_level');
            $table->string('picture');
           $table->timestamps();
             });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}