<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// For quick insert seeding
use Illuminate\Support\Facades\DB;

class SeedInjuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // Seed initial injurt values

            DB::table('injuries')->insert([
                ['knee' => false, 'hip' => false, 'spinal' => false, 'wrist' => false, 'whiplash' => true],
            ]);
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
