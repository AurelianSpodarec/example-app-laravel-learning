<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreignId('site_industry_id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            // $table->string('type');

            $table->string('logo');
            $table->string('thumbnail');
            
            $table->string('brand_color');
            $table->json('color_palette');

            $table->time('version');
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
        Schema::dropIfExists('companies');
    }
}



// I must ask again, but if you were to create a database for this, how would you go about this? https://saaspages.xyz/sites/appsumo

//     Structuring the 'blocks' in general. Talking about the 'neavbars', 'headers' etc...
    
    
//     Coz the more I think the more I get confused. 
    
//     Because if we do this
//     ```
//     // blocks
//     // id  header  url 
//     // id  hero    url
//     // id  footer  url
//     // id  header  url
    
    
//     // pages
//     // id  home 
//     // id  about
    
//     // company
//     // id page_id header_id footer_id (and 30more)
//     ```
    
//     How do you assign company, multiple companies  `page` for home, with different image,
    
//     Header will need to have the image, and be attached to a company, 
//     And on a blocks page stuff should be filtered by a blocks category e.g. show only headers
    
    
//     I'm very confused here. 
    
//     is the id going to be different and the name the same? 
    
    
//     So then to get only headers, we would just grab the headers name ?
    
//     There will be thousands and thousnads of records, at the start yes. I'll add a few hundred companies which means 100companies will be 100headers, footers, cards etc... so thats easy over a thousands of stuff, and will be adding it daily. 
    
//     But I'm still confsued on how the database should work, and this feels inefficient. 
    
    
//     One thing would be create a new table for each category 'header', but thats going to be like hundreds of tables - because same goes for pages 