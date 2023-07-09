<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /** structure de la tables des clients*/
        Schema::create("clients",function(Blueprint $table){
            $table->string('Nom_cl')->nullable(false);
            $table->string('Email_cl')->nullable(false);
            $table->string('Telephone_cl')->nullable(false);
            $table->string('Login_cl')->nullable(false);
            $table->string('Password_cl')->nullable(false);
            $table->primary(['Nom_cl','Telephone_cl']);
            $table->timestamps();

        });

      /** strurture de la table des produits*/
        Schema::create("produits",function(Blueprint $table){
            $table->string('Nom_pd')->nullable(false);
            $table->integer('Quantite_pd')->nullable(false);
            $table->float('PrixU_pd')->nullable(false);
            $table->binary('Photo_pd')->nullable(false);
            $table->primary('Nom_pd');
            $table->timestamps();

        });
/** strurture de la table des livraisons*/
        Schema::create("livraisons",function(Blueprint $table){
            $table->id('Id_lv');
            $table->date('DatePro_lv')->nullable(false);
            $table->string('Ville_lv')->ullable(false);
            $table->string('Quartier_lv')->ullable(false);

            $table->timestamps();
           });

            /** strurture de la table des livraisons*/

            Schema::create("comandes",function(Blueprint $table){
                $table->id('Id_cmd');
                $table->string('Nom_cl');
                $table->string('Telephone_cl');
                $table->id('Id_lv');
                $table->string('Nom_pd');
                $table->foreign(['Nom_cl','Telephone_cl'])->references(['Nom_cl','Telephone_cl'])->on('clients');
                $table->foreign('Id_lv')->references('Id_lv')->on('livraison');
                $table->foreign('Nom_pd')->references('Nom_pd')->on('produits');
                $table->timestamps();

               });
    }



    /** strurture de la table des livraisons*/
    /**
     * Reverse the migrations.
     */
    public function down(): void {


        Schema::deleteIfexists('comandes');
        Schema::deleteIfexists('livraisons');
        Schema::deleteIfexists('produits');
        Schema::deleteIfexists('clients');
    }
};
