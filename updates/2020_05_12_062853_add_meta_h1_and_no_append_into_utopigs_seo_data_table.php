<?php namespace Utopigs\Seo\Updates;

use DB;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Termiyanc\Store\Models\Feed;

class AddMetaH1AndNoAppendIntoUtopigsSeoDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utopigs_seo_data', function (Blueprint $table) {
            $table->string('h1')->nullable();
            $table->unsignedTinyInteger('no_append')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utopigs_seo_data', function (Blueprint $table) {
            $table->dropColumn('h1');
            $table->dropColumn('no_append');
        });
    }
}
