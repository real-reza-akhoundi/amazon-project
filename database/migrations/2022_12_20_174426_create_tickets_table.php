<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->text("description");
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('seen')->default(0)->comment("0 => unseen , 1 => seen");
            $table->foreignId("reference_id")->constrained("ticket_admins")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("users_id")->constrained("users")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("category_id")->constrained("ticket_categories")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("priority_id")->constrained("ticket_priorities")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("ticket_id")->constrained("tickets")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
