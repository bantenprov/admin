<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->uuid('uuid', 191)->unique();
			$table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('opd_id')->unsigned()->nullable()->index();
            $table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
