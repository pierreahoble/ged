<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('groupe_user');
            $table->string('tel');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        App\User::create([
            'nom'=>'Manzi',
            'email'=>'laurent@gmail.com',
            'password'=>bcrypt('1234'),
            'prenom'=>'Pierre',
            'pseudo'=>'laurent',
            'groupe_user'=>'1',
            'tel'=>'70456780'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
