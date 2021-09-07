<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use Illuminate\Database\Seeder;

class DashboardBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developmentBlog1 = new Dashboard();
        $developmentBlog1->blog_name_az='test_az';
        $developmentBlog1->blog_name_en='Software development';
        $developmentBlog1->name_az='WHAT WE DO AZ';
        $developmentBlog1->name_en='WHAT WE DO';
        $developmentBlog1->short_info_az='az Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog1->short_info_en = 'Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog1->image = '';
        $developmentBlog1->status = 0;
        $developmentBlog1->save();

        $developmentBlog2 = new Dashboard();
        $developmentBlog2->blog_name_az='AzHardware distribution';
        $developmentBlog2->blog_name_en='Hardware distribution';
        $developmentBlog2->name_az='WHAT WE DO AZ';
        $developmentBlog2->name_en='WHAT WE DO';
        $developmentBlog2->short_info_az='az Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog2->short_info_en = 'Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog2->image = '';
        $developmentBlog2->status = 0;
        $developmentBlog2->save();

        $developmentBlog3 = new Dashboard();
        $developmentBlog3->blog_name_az='AzHardware distribution';
        $developmentBlog3->blog_name_en='Hardware distribution';
        $developmentBlog3->name_az='WHAT WE DO AZ';
        $developmentBlog3->name_en='WHAT WE DO';
        $developmentBlog3->short_info_az='az Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog3->short_info_en = 'Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog3->image = '';
        $developmentBlog3->status = 0;
        $developmentBlog3->save();

        $developmentBlog4 = new Dashboard();
        $developmentBlog4->blog_name_az='AzHardware distribution';
        $developmentBlog4->blog_name_en='Hardware distribution';
        $developmentBlog4->name_az='WHAT WE DO AZ';
        $developmentBlog4->name_en='WHAT WE DO';
        $developmentBlog4->short_info_az='az Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog4->short_info_en = 'Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs';
        $developmentBlog4->image = '';
        $developmentBlog4->status = 0;
        $developmentBlog4->save();
    }
}
