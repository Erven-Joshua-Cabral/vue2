<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resource_mains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('katakana_name');
            $table->string('resume');
            $table->dateTime('date_hired');
            $table->float('rate');
            $table->float('ibm_rate');
            $table->float('ubicom_rate');
            $table->dateTime('po_Until');
            $table->string('action_batch');
            $table->string('yoe(pre-aws)');
            $table->string('yoe');
            $table->string('tech_certification');
            $table->string('core_skills');
            $table->string('sub_skill5');
            $table->string('sub_skill4');
            $table->string('sub_skill3');
            $table->string('sub_skill2');
            $table->string('sub_skill1');
            $table->string('nihongo');
            $table->string('position');
            $table->string('bu_off');
            $table->string('bu_ass');
            $table->string('project');
            $table->string('current_assignment');
            $table->string('candidate_for');
            $table->string('loc');
            $table->string('email');
            $table->string('main_Skill');
            $table->string('sub_Skill');
            $table->string('focus_Skill');
            $table->string('location1');
            $table->string('location2');
            $table->string('contact#');
            $table->string('passport_Expiration');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource_mains');
    }
};
