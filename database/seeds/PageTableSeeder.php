<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();

        DB::table('pages')->insert([
        	[
        		'title' => 'About',
        		'url' => 'about',
        		'content' => 'This is the about page.'
        	],
        	[
        		'title' => 'Contact',
        		'url' => 'contact',
        		'content' => 'This is the contact page.'
        	],
        	[
        		'title' => 'FAQ',
        		'url' => 'faq',
        		'content' => 'This is the faq page.'
        	],
        	[
        		'title' => 'Media',
        		'url' => 'media',
        		'content' => 'This is the media page.'
        	],
        ]);
    }
}
